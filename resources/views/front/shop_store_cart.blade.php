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
                <a href="/cy_store">
                    <img src="{{asset('/img/cy_plant/cy_logo_big.png')}}" alt="">
                </a>
            </div>
            <div class="shimmer_logo">
                <a href="/sc_store">
                    <img src="{{asset('/img/sc_shop/sc_logo_big.png')}}" alt="">
                </a>
            </div>
            <div class="deco_line">
                <a href="./shop_store"><span>ALL.</span></a>
            </div>
            <div class="cart_flow">
                <div class="cart_list">
                    <div class="circle now">
                        <span>購物車</span>
                    </div>
                </div>
                <div class="cart_check">
                    <div class="circle">
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
                <div class="text_list">
                    <span>品項</span>
                    <span>品名</span>
                    <span>數量</span>
                    <span>單價</span>
                    <span>總價</span>
                </div>
                <div class="white_bar"></div>

                @foreach ($items as $item)
                <div class="item">
                    <img src="./img/cy_plant/product1.png" alt="">
                    <span>{{$item->name}}</span>
                    <div class="input_block">
                        <img id="minus" src="./img/shop_store/minus.svg" alt="" data-itemID="{{$item->id}}">
                        <span class="qty_input" data-itemID="{{$item->id}}">{{$item->quantity}}</span>
                        <img id="plus" src="./img/shop_store/plus.svg" alt="" data-itemID="{{$item->id}}">
                    </div>
                    <span>{{$item->price}} 元</span>
                    <span>{{$item->price*$item->qty}} 元</span>
                    <div class="btn-area">
                        <button class="btn btn-danger">刪除</button>
                    </div>
                </div>
                <div class="white_bar"></div>
                @endforeach
                <a href="/cart_checkout"><button class="btn btn-info">前往結帳</button></a>
            </div>
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


$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.btn-minus').click(function(){
        var cartID = $(this).attr('data-itemID');
        $.ajax({
            method: 'POST',
            url: '/cart_update/'+cartID,
            data: {
                quantity:-1
            },
            success: function (res) {
                // 網頁同步數量減少
                var old_value = $(`.qty_input[data-itemID="${cartID}"]`).text();
                var new_value = Math.max(parseInt(old_value) - 1 , 1);
                $(`.qty_input[data-itemID="${cartID}"]`).text(new_value);
                // 網頁同步價錢變動
                var old_total = $(`.Cart__productTotal[data-itemID="${cartID}"]`).text();
                var price = $(`.Cart__productPrice[data-itemID="${cartID}"]`).text();
                var new_total = Math.max(parseInt(old_total) - parseInt(price),parseInt(price));
                $(`.Cart__productTotal[data-itemID="${cartID}"]`).text(new_total);
            },
        });
    })
    $('.btn-plus').click(function(){
        var cartID = $(this).attr('data-itemID');
        $.ajax({
            method: 'POST',
            url: '/cart_update/'+cartID,
            data: {
                quantity:1
            },
            success: function (res) {
                var old_value = $(`.qty_input[data-itemID="${cartID}"]`).text();
                var new_value = parseInt(old_value) + 1;
                Math.max(new_value,0);
                $(`.qty_input[data-itemID="${cartID}"]`).text(new_value);
                var old_total = $(`.Cart__productTotal[data-itemID="${cartID}"]`).text();
                var price = $(`.Cart__productPrice[data-itemID="${cartID}"]`).text();
                var new_total = parseInt(old_total) + parseInt(price);
                $(`.Cart__productTotal[data-itemID="${cartID}"]`).text(new_total);
            },
        });
    });
    // $('.Cart__productDel').click(function(){
    //     var cartID = $(this).attr('data-itemID');
    //     var r=confirm("確定要將商品移出購物車嗎?")
    //     if(r==true){
    //         $.ajax({
    //             method: 'POST',
    //             url: '/cart_delete/'+cartID,
    //             data: {},
    //             success: function (res) {
    //                 window.location.reload();
    //             },
    //         });
    //     };
    // });
    // $(function(){
        //     var valueElement = $('.qty_input');
        //     function incrementValue(e){
        //         $('.qty_input').val(Math.max(parseInt($('.qty_input').val()) + e.data.increment, 1))
        //         return false;
        //     }
        //     $('.plus').bind('click', {increment: 1}, incrementValue);
        //     $('.minus').bind('click', {increment: -1}, incrementValue);
        // // });
        // $('.plus').click(()=>{
        //     let id = $(this).attr('data-itemID');
        //     console.log(id);
            // var old_value = $(`.qty_input=`).text();
            // console.log(old_value);
            // var new_value = parseInt(old_value) + 1;
            // Math.max(new_value, 0);
        // })
        // $('.minus').click(()=>{

        // })
</script>
@endsection
