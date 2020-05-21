
@extends('layouts/footer')
@section('css')
    <link rel="stylesheet" href="{{asset('css/sc_store.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>微光寓所</title>
@endsection
<body>
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
                <div class="sc_types" >
                    <div class="sc_type">花茶</div>
                    <div class="sc_type">咖啡</div>
                    <div class="sc_type">課程</div>
                    <div class="sc_type">乾燥花</div>
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
            <div class="products_list container">

            @foreach ($products as $item)
                <div class="product">
                    <div class="product_img">
                        <a href="/sc_store_item/{{$item->id}}">
                            <img src="{{asset('/storage/'.$item->img)}}" alt="">
                        </a>
                    </div>
                    <div class="product_title">
                        <span>{{$item->title}}</span>
                    </div>
                    <div class="product_price">
                        {{$item->price}}元
                    </div>
                </div>
            @endforeach

            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
