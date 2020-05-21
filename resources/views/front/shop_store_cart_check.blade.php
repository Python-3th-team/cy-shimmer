@extends('layouts/footer')

@section('css')
<link rel="stylesheet" href="./css/shop_store.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>千暘植務店 & 微光寓所</title>
@endsection

@section('content')
<div class="shop_store">
    <div class="navbar">
        <a href="/cart_total"><button class="btn btn-info">購物車</button></a>
        <a href="/login"><button class="btn btn-info">登入</button></a>
        <a href="/logout"><button class="btn btn-info">登出</button></a>
    </div>
    <header>
        <div class="bg-color">
            <div class="bg-bar"></div>
            <div class="cy_logo">
                <a href="./cy_store">
                    <img src="./img/cy_plant/cy_logo_big.png" alt="">
                </a>
            </div>
            <div class="shimmer_logo">
                <a href="./sc_store">
                    <img src="./img/sc_shop/sc_logo_big.png" alt="">
                </a>
            </div>
            <div class="deco_line">
                <a href="./shop_store"><span>ALL.</span></a>
            </div>
            <div class="cart_flow">
                <div class="cart_list">
                    <div class="circle">
                        <span>購物車</span>
                    </div>
                </div>
                <div class="cart_check">
                    <div class="circle now">
                        <span>結帳</span>
                    </div>
                </div>
                <div class="cart_finish">
                    <div class="circle">
                        <span>完成</span>
                    </div>
                </div>
                <div class="deco_line3"></div>
                <div class="triangle"></div>
            </div>
            <div class="deco_line2"></div>
        </div>
    </header>
    <main>
        <div class="cart_container container">
            <div class="cart_list">
                <div class="text_list cart_checked">
                    <span>品項</span>
                    <span>品名</span>
                    <span>數量</span>
                    <span>單價</span>
                    <span>總價</span>
                </div>
                <div class="white_bar"></div>

                @foreach ($items as $item)
                <div class="item cart_checked">
                    <img src="./img/cy_plant/product1.png" alt="">
                    <span>{{$item->name}}</span>
                    <div class="input_block">
                        <span class="qty_input" data-itemId="1">{{$item->quantity}}</span>
                    </div>
                    <span>{{$item->price}} 元</span>
                    <span>{{$item->price*$item->quantity}} 元</span>
                </div>
                <div class="white_bar"></div>

                @endforeach
            </div>
            <div>運費：@if(Cart::getTotal() > 30000)免運費 @else 120元 @endif</div>
            <?php
                if (Cart::getTotal() > 30000) {
                    $total_price = Cart::getTotal();
                } else {
                    $total_price = Cart::getTotal()+120;
                }
            ?>
            <div>總計：{{$total_price}} 元</div>
            <h2 class="mt-5">收件人資訊</h2>
            <form action="/cart_checkout" method="post">
                @csrf
                <div class="input-group input-group-lg my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">　姓名　</span>
                    </div>
                    <input type="text" class="form-control" name="recipient_name">
                </div>
                <div class="input-group input-group-lg my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">　電話　</span>
                    </div>
                    <input type="tel" class="form-control" name="recipient_phone">
                </div>
                <div class="input-group input-group-lg my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">　地址　</span>
                    </div>
                    <input type="text" class="form-control" name="recipient_address">
                </div>
                <div class="input-group input-group-lg my-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">送貨時段</span>
                    </div>
                    <input type="text" class="form-control" name="shipment_time">
                </div>
                <button type="submit" class="btn btn-primary">結帳</button>
            </form>
        </div>
    </main>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script>
    // $(function(){
        //     var valueElement = $('.qty_input');
        //     function incrementValue(e){
        //         $('.qty_input').val(Math.max(parseInt($('.qty_input').val()) + e.data.increment, 1))
        //         return false;
        //     }
        //     $('.plus').bind('click', {increment: 1}, incrementValue);
        //     $('.minus').bind('click', {increment: -1}, incrementValue);
        // });
        $('.plus').click(()=>{
            let id = $(this).attr('data-itemID');
            console.log(id);
            // var old_value = $(`.qty_input=`).text();
            // console.log(old_value);
            // var new_value = parseInt(old_value) + 1;
            // Math.max(new_value, 0);
        })
        $('.minus').click(()=>{

        })
</script>
@endsection
