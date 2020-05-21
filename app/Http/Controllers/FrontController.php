<?php

namespace App\Http\Controllers;

use App\News;
use App\Orders;
use App\Cy_News;
use App\Sc_News;
use App\CyProduct;
use App\ScProduct;
use Carbon\Carbon;
use App\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TsaiYiHua\ECPay\Checkout;
use TsaiYiHua\ECPay\Services\StringService;

class FrontController extends Controller
{
    protected $checkout;

    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }
    public function index()
    {
        return view('front/index');
    }

    public function sc_shop()
    {
        $news_data = Sc_News::all();
        return view('front/sc_shop/sc_shop', compact('news_data'));
    }
    public function cy_plant()
    {
        $news_data = Cy_News::all();
        return view('front/cy_plant/cy_plant', compact('news_data'));
    }
    public function shop_store()
    {
        $cy_products = CyProduct::all()->sortByDesc('sort');
        $sc_products = ScProduct::all()->sortByDesc('sort');
        return view('front/shop_store', compact('cy_products', 'sc_products'));
    }
    public function cy_store()
    {
        $products = CyProduct::all()->sortByDesc('sort');
        return view('front/cy_plant/cy_store', compact('products'));
    }
    public function sc_store()
    {
        $products = ScProduct::all()->sortByDesc('sort');

        return view('front/sc_shop/sc_store', compact('products'));
    }

    public function cy_store_item($item_id)
    {
        $product = CyProduct::find($item_id);
        return view('front/cy_plant/cy_store_item', compact('product'));
    }

    public function sc_store_item($item_id)
    {
        $product = ScProduct::find($item_id);
        return view('front/sc_shop/sc_store_item', compact('product'));
    }
    // public function sc_shop(){
    //     $news_data = News::all();
    //     return view('admin/news/sc_shop' , compact('news_data'));
    // }
    // public function sc_shop_detail($id){
    //     $news = News::find($id);
    // return view('admin/news/sc_shop_detail' , compact('news'));
    // }

    // 購物車
    public function add_cart_cy(Request $request, $productID)
    {
        $productId = $productID;
        $Product = CyProduct::find($productId); // assuming you have a Product model with id, name, description & price
        $rowId = $productId; // generate a unique() row ID
        $userID = Auth::user()->id; // the user ID to bind the cart contents
        // add the product to cart
        \Cart::session($userID)->add(array(
            'id' => $rowId,
            'name' => $Product->title,
            'price' => $Product->price,
            'quantity' => $request->qty,
            'attributes' => array(),
            'associatedModel' => $Product
        ));
        return redirect('/cart_total');
    }
    public function add_cart_sc(Request $request, $productID)
    {

        $productId = $productID;
        $Product = ScProduct::find($productId); // assuming you have a Product model with id, name, description & price
        $rowId = $productId; // generate a unique() row ID
        $userID = Auth::user()->id; // the user ID to bind the cart contents
        // add the product to cart
        \Cart::session($userID)->add(array(
            'id' => $rowId,
            'name' => $Product->title,
            'price' => $Product->price,
            'quantity' => $request->qty,
            'attributes' => array(),
            'associatedModel' => $Product
        ));
        return redirect('/cart_total');
    }
    public function cart_total()
    {
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent()->sort();
        return view('front/shop_store_cart', compact('items'));
    }

    public function cart_checkout()
    {
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent()->sort();
        return view('front/shop_store_cart_check', compact('items'));
    }
    public function post_cart_checkout(Request $request)
    {
        // 接收請求資料, 宣告資料變數
        $userID = Auth::user()->id;
        $recipient_name = $request->recipient_name;
        $recipient_phone = $request->recipient_phone;
        $recipient_address = $request->recipient_address;
        $shipment_time = $request->shipment_time;
        $total_price = \Cart::session($userID)->getTotal();
        if ($total_price > 30000) {
            $shipment_price = 0;
        } else {
            $shipment_price = 120;
        }
        // 建立訂購者訂單
        $order = new Orders;
        $order->user_id = $userID;
        $order->recipient_name = $recipient_name;
        $order->recipient_phone = $recipient_phone;
        $order->recipient_address = $recipient_address;
        $order->shipment_time = $shipment_time;
        $order->total_price = $total_price;
        $order->shipment_price = $shipment_price;
        $order->save();

        // 建立訂單編號
        $order->order_no = 'hYd' . Carbon::now('+8:00')->format('YmdHis') . $order->id;
        $order->save();

        // 建立商品詳細訂單->關聯訂購者訂單
        $cart_contents = \Cart::getContent()->sort();
        $items = [];

        foreach ($cart_contents as $item) {
            $OrderItem = new OrderDetails();
            $OrderItem->order_id = $order->id;
            $OrderItem->product_id = $item->id;
            $OrderItem->qty = $item->quantity;
            $OrderItem->price = $item->price;
            $OrderItem->save();

            $product = CyProduct::find($item->id);
            $product_name = $product->title;
            $new_array = [
                'name' => $product_name,
                'qty' => $item->quantity,
                'price' => $item->price,
                'unit' => '個'
            ];

            array_push($items, $new_array);
        }
        if ($shipment_price > 0) {
            $shipment_item = [
                'name' => '運費',
                'qty' => 1,
                'price' => 120,
                'unit' => '個'
            ];
            array_push($items, $shipment_item);
        } else {
            $shipment_item = [
                'name' => '運費',
                'qty' => 1,
                'price' => 0,
                'unit' => '個'
            ];
            array_push($items, $shipment_item);
        }

        //第三方支付
        $order_no = Carbon::now('+8:00')->format('YmdHis');

        $formData = [
            'UserId' => "", // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => $order->order_no,
            // 'ItemName' => 'Product Name',
            // 'TotalAmount' => \Cart::getTotal(),
            'PaymentMethod' => 'ALL', // ALL, Credit, ATM, WebATM
        ];

        //清空購物車
        \Cart::clear();

        // return $this->checkout->setPostData($formData)->send();
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }
    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }
    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {
                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                // dd($this->checkoutResponse->collectResponse($serverPost));

                $order_no = $serverPost["MerchantTradeNo"];
                $order = orders::where('order_no', $order_no)->first();
                $order->payment_status = "已完成";
                $order->save();
                return redirect("/checkoutend/{$order_no}");
            }
        }
    }
}
