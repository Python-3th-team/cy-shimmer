<?php

namespace App\Http\Controllers;

use App\ScType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ScTypeController extends Controller
{
    public function index()
    {
        $product_types = ScType::all();
        return view('admin.sc_shop.sc_store.sc_type.index', compact('product_types'));
    }

    public function create(Request $request)
    {
        return view('admin.sc_shop.sc_store.sc_type.create');
    }

    public function store(Request $request)
    {
        $product_types = $request->all();
        if($request->hasFile('img')){
            $file_name = $request ->file('img')->store('','public');
            $product_types['img'] = $file_name;
        }
        ScType::create($product_types);
        return redirect('/home/sc_product_type');
    }

    public function edit($id)
    {
        $product_types = ScType::find($id);
        return view('admin.sc_shop.sc_store.sc_type.edit', compact('product_types'));
    }

    public function update(Request $request, $id)
    {
        $request_data = $request->all();
        $item =ScType::find($id);

        // 判斷是否有更新圖片
        if($request->hasFile('img')){
            // 刪除原有圖片
            Storage::disk('public')->delete($item->img);
            // 上傳新的圖片
            $file_name = $request->file('img')->store('','public');
            $request_data['img'] = $file_name;
        }

        $item->update($request_data);
        return redirect('/home/sc_product_type');
    }

    public function destroy($id)
    {
        $item = ScType::find($id);
        $item->delete();
        return redirect('home/sc_product_type');
    }
}
