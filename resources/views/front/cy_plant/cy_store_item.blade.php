@extends('layouts/footer')
@section('css')

<link rel="stylesheet" href="{{asset('css/cy_store.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>千暘植務店</title>

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
            <div class="cy_types">
                <div class="cy_type">種苗</div>
                <div class="cy_type">觀葉</div>
                <div class="cy_type">多肉</div>
                <div class="cy_type">盆栽</div>
            </div>
            <div class="shimmer_logo">
                <a href="/sc_store">
                    <img src="{{asset('/img/sc_shop/sc_logo_big.png')}}" alt="">
                </a>
            </div>
            <div class="deco_line">
                <a href="/shop_store">
                    <span>ALL.</span>
                </a>
            </div>
            <div class="deco_line2">

            </div>
        </div>
    </header>
    <main>
        <div class="item container">
            <div class="item_img">
                <div class="img">
                    <img src="{{asset('/storage/'.$product->img)}}" alt="">
                    {{-- <img src="/stroage/.{{$product->img}}" alt=""> --}}
                </div>
            </div>
            <form action="/add_cart_cy/{{$product->id}}" method="POST" class="item_content">
                @csrf
                <div class="white_bar"></div>
                <span>品名</span>
                <span class="product_title">{{$product->title}}</span>
                <div class="white_bar"></div>
                <span>介紹</span>
                <span class="item_intro">{!!$product->content!!}</span>
                <div class="white_bar"></div>
                <div class="item_pay">
                    <div class="qty">
                        <span>數量</span>
                        <div class="input_block">
                            <img id="minus" src="{{asset('img/shop_store/minus.svg')}}" alt="">
                            <input id="value" name="qty" type="text" class="qty_input" maxlength="2" value="1" min="1"
                                onkeypress='return event.charCode >= 49 && event.charCode <= 57'></span>
                            <img id="plus" src="{{asset('img/shop_store/plus.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="price">
                        <span>單價</span>
                        <span>{{$product->price}}元</span>
                    </div>
                </div>
                <div class="white_bar"></div>
                <button type="submit" class="btn btn-primary">加入購物車</button>
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
    $(function(){
            var valueElement = $('#value');
            function incrementValue(e){
                $('#value').val(Math.max(parseInt($('#value').val()) + e.data.increment, 1))
                return false;
            }
            $('#plus').bind('click', {increment: 1}, incrementValue);
            $('#minus').bind('click', {increment: -1}, incrementValue);
        });
</script>


@endsection
