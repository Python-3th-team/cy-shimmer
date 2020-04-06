<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="./scss/sc_shop.css">

</head>

<body>


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
                    <a href="">
                        <div class="cy_logo d-flex justify-content-center">
                            <div>
                                <img src="./img/sc_logo.svg" alt="">
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
            <div class="calendar_container container">
                <div class="calendar">
                    <img src="/img/calendar.jpg" alt="">
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
                                            <img width="100%" src="{{$item->img}}" alt="">
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
                    <div class="news_link">
                        <span class="line-T"></span>
                        <div class="text">查看更多</div>
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
    <section>
        <div class="sec_container  container-fluid" id="sec_container">
            <div class="container">
                <div class="sec_position_btm container d-flex justify-content-end" data-aos="fade-left">
                    <div class="col-xl-3 d-flex align-items-center px-0">
                        <!-- 設定一個空格來撐位置 -->
                    </div>
                    <div class="sec_position_btm_list container d-flex col-12 col-xl-9">
                        <div class="d-flex flex-column">
                            <h4>開放式三明治 Open-Faced Sandwich</h4>
                            <p>細磨全麥麵粉搭配自陪葡萄酵母製成高纖麵包，健康好消化</p>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                            <span>180&emsp;&emsp;烘烤番茄</span>
                        </div>
                        <div class="sec_position_btm_list_photo">
                            <img src="./img/food1.jpg" alt="">
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
        <div class="swiper-container container-fluid">
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
    <!-- <section class="card_container " id="card_container">
        <div class="card_desk d-flex flex-wrap container">
            <div class="row d-flex justify-content-between">

                <div class="card col-12  col-md-3 ">
                    <div class="card_title link hover-12">寓所小品</div>
                    <img width="100%" src="./img/sc_card1.jpg" alt="">
                    <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                    <div class="card_link">
                        <span class="line-T"></span>
                        <div class="text">了解更多</div>
                        <span class="line-B"></span>
                    </div>
                </div>
                <div class="card col-12  col-md-3 ">
                    <div class="card_title">寓所小品</div>
                    <img width="100%" src="./img/sc_card2.jpg" alt="">
                    <div class="card_text">青山依舊在，幾度夕陽紅。慣看秋月春，風。一壺濁酒喜相逢，浪花淘盡英雄。</div>
                    <div class="card_link">
                        <span class="line-T"></span>
                        <div>了解更多</div>
                        <span class="line-B"></span>
                    </div>
                </div>
                <div class="card col-12  col-md-3 ">
                    <div class="card_title">寓所小品</div>
                    <img width="100%" src="./img/sc_card3.jpg" alt="">
                    <div class="card_text">清明時節雨紛紛，路上行人欲斷魂，借問酒家何處有？牧童遙指杏花村。</div>
                    <div class="card_link">
                        <span class="line-T"></span>
                        <div>了解更多</div>
                        <span class="line-B"></span>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <footer>
        <div class="footer" id="footer">
            <div class="footer_top d-flex">
                <div class="logo">
                    <img width="100px" src="/img/sc_logo.svg" alt="">
                    <img width="100px" src="/img/cy_logo.svg" alt="">
                </div>
                <div class="adress">
                    <span class="d-flex">
                        <div class="icon">
                            <svg id="facebook_icon" viewBox="0 0 512 512">
                                <path
                                    d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0" />
                            </svg>
                        </div>
                        <div class="icon">
                            <svg x="0px" y="0px" viewBox="0 0 551.034 551.034"
                                style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">
                                <g>
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57"
                                        x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                        <stop offset="0" style="stop-color:#E09B3D" />
                                        <stop offset="0.3" style="stop-color:#C74C4D" />
                                        <stop offset="0.6" style="stop-color:#C21975" />
                                        <stop offset="1" style="stop-color:#7024C4" />
                                    </linearGradient>
                                    <path id="path1"
                                        d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z" />
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57"
                                        x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                        <stop offset="0" style="stop-color:#E09B3D" />
                                        <stop offset="0.3" style="stop-color:#C74C4D" />
                                        <stop offset="0.6" style="stop-color:#C21975" />
                                        <stop offset="1" style="stop-color:#7024C4" />
                                    </linearGradient>
                                    <path id="path2"
                                        d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z" />
                                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57"
                                        x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                        <stop offset="0" style="stop-color:#E09B3D" />
                                        <stop offset="0.3" style="stop-color:#C74C4D" />
                                        <stop offset="0.6" style="stop-color:#C21975" />
                                        <stop offset="1" style="stop-color:#7024C4" />
                                    </linearGradient>
                                    <circle id="path3" cx="418.31" cy="134.07" r="34.15" />
                                </g>
                            </svg>
                        </div>
                    </span>
                    <li>營業時間：07：30~14：00</li>
                    <li>聯絡方式: 09xx-xxx-XXX</li>
                    <li>地址: 南投縣埔里鎮東榮路220號, Puli, T'Ai-Wan, Taiwan</li>



                </div>
            </div>
            <div class="footer_line"></div>
            <div class="footer_btm d-flex justify-content-center">
                COPYRIGHT ©2020 KIDORI ALLRIGHTS RESERVED.
            </div>
        </div>
    </footer>

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
            spaceBetween: 70,
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
        });
        // swiper
        window.onscroll = function () {
            console.log(document.documentElement.scrollTop);
        }
        // 監測滾軸位置

    </script>
</body>

</html>
