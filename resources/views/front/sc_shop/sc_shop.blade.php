@extends('layouts/footer')

@section('css')

    <title>微光寓所</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/cwtexfangsong.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos.js -->
    <link rel="stylesheet" href="{{asset('css/sc_shop.css')}}">

@endsection


@section('content')

        <header>
            <div class="banner drop-shadow d-flex flex-column">

                <div class="navbar">
                    <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 341.333 341.333"
                        style="enable-background:new 0 0 341.333 341.333;" xml:space="preserve">
                        <g>
                            <g>
                                <rect y="277.333" width="341.333" height="42.667" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect y="149.333" width="341.333" height="42.667" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect y="21.333" width="341.333" height="42.667" />
                            </g>
                    </svg>
                    <div class="nav_container container px-0">

                        <li class="nav-item">
                            <a class="nav-link active" href="#calendar_container">營業時間</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sec_container">微光輕食</a>
                        </li>
                        <a href="/">
                            <div class="cy_logo d-flex justify-content-center">
                                <div>
                                    <img src="{{asset('/img/sc_shop/sc_logo_sm.png')}}" alt="">
                                </div>
                            </div>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="#card_container">寓所小品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">聯絡我們</a>
                        </li>

                    </div>

                </div>
                <div class="calendar_container container" id="calendar_container">
                    <div class="calendar">
                        <img src="./img/sc_shop/calender.jpg" alt="">
                    </div>
                </div>
            </div>

        </header>

        <section>
            <div class="news_container">
                <div class="container">
                    <div class="news_content">
                        <div class="news_title">情報更新</div>

                        <div class="news_title_btm">

                        <thead>
                            @foreach ($news_data as $item)
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}">

                                <div>{{$item->date}}</div>
                                <div class="news_list">{{$item->title}}</div>
                                <div >▶</div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <span>{{$item->date}}</span>
                                            <hr>
                                            <img width="100%" src="{{$item->img}}" alt="">
                                            <span>活動項目：{{$item->title}}</span>
                                            <br>
                                            <span>活動時間：{{$item->txtdate}}</span>
                                            <br>
                                            <span>活動內容：{{$item->content}}</span>
                                        </div>
                                        <div class="modal-footer">
                                            <div data-dismiss="modal">Close</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </thead>


                        </div>
                        {{-- <div class="news_title_btm">
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter">
                                <div>2020/03/26</div>
                                <div class="news_list">
                                    獨在異鄉爲異客，每逢佳節倍思親。
                                    遙知兄弟登高處，遍插茱萸少一人。
                                </div>
                                <div>▶</div>
                            </div>
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter1">
                                <div>2020/03/26</div>
                                <div class="news_list">
                                    月落烏啼霜滿天，江楓漁火對愁眠。
                                    姑蘇城外寒山寺，夜半鐘聲到客船。
                                </div>
                                <div>▶</div>
                            </div>
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter2">
                                <div>2020/03/26</div>
                                <div class="news_list">
                                    白日依山盡，黃河入海流。
                                    欲窮千里目，更上一層樓。
                                </div>
                                <div>▶</div>
                            </div>
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter3">
                                <div>2020/03/26</div>
                                <div class="news_list">
                                    三日入廚下，洗手作羹湯。
                                    未諳姑食性，先遣小姑嘗。
                                </div>
                                <div>▶</div>
                            </div>
                            <div class="news_inner_content d-flex" data-toggle="modal" data-target="#exampleModalCenter4">
                                <div>2020/03/26</div>
                                <div class="news_list">
                                    紅豆生南國，春來發幾枝。
                                    願君多采擷，此物最相思。
                                </div>
                                <div>▶</div>
                            </div>
                        </div> --}}
                        <div class="news_link">
                            <span class="line-T"></span>
                            <div class="text" data-toggle="modal" data-target="#exampleModalCenter5">查看更多</div>
                            <span class="line-B"></span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section>
            <div class="sec_background_top ">
                <div class="product_bg_T"></div>
            </div>
        </section>

        <section class="menu_bg" id="sec_container">

            <div class="menu">
                <div class="menuitem">
                    <div class="menu_img" data-aos="fade-right" data-aos-delay="500">
                        <img width="100%" src="./img/sc_shop/food_1.png" alt="">
                    </div>
                    <div class=" text" data-aos="fade-left">
                        <div class="text_bg">
                            <h4>開放式三明治 Open-Faced Sandwich</h4>
                            <p>細磨全麥麵粉搭配自陪葡萄酵母製成高纖麵包，健康好消化</p>
                            <div class="wrapMenu">
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menuitem">
                    <div class="menu_img">
                        <img width="100%" src="./img/sc_shop/food_1.png" alt="">
                    </div>
                    <div class=" text">
                        <div class="text_bg">
                            <h4>開放式三明治 Open-Faced Sandwich</h4>
                            <p>細磨全麥麵粉搭配自陪葡萄酵母製成高纖麵包，健康好消化</p>
                            <div class="wrapMenu">
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menuitem">
                    <div class="menu_img">
                        <img width="100%" src="./img/sc_shop/food_1.png" alt="">
                    </div>
                    <div class=" text">
                        <div class="text_bg">
                            <h4>開放式三明治 Open-Faced Sandwich</h4>
                            <p>細磨全麥麵粉搭配自陪葡萄酵母製成高纖麵包，健康好消化</p>
                            <div class="wrapMenu">
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                                <p>180&emsp;烘烤番茄&emsp;&emsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="sec_background_btm ">
                <div class="product_bg_B"></div>
            </div>
        </section>
        <section>
            <div class="swiper-container container-fluid" id="card_container">
                <div class="swiper_title">寓所小品</div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product1.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product2.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product3.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product4.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product1.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product2.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product3.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product4.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product1.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card_title">商品名稱</div>
                            <img width="100%" src="./img/sc_shop/product2.png" alt="">
                            <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                            <div class="card_link">
                                <span class="line-T"></span>
                                <div>了解更多</div>
                                <span class="line-B"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </section>
        <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
            <a style="text-align: center;">
                <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
            </a>
        </div>

@endsection


    @section('js')


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
    <!-- swiper -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- aos -->


    <script>
        AOS.init();
        //aos
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 20,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
            }
        });
        // swiper

        window.onscroll = function () {
            console.log(document.documentElement.scrollTop);
        }
        // 監測滾軸位置
    </script>

    @endsection

