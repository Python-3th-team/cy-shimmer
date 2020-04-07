    @extends('layouts/footer')

    @section('css')
    <title>千暘植務店 & 微光寓所</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @endsection


    @section('content')
    <section class="nav_hamburger menu cid-rTc7EbAIji" once="menu" id="">
        <header id="header">
            <nav class="nav">
                <button class="toggle-menu">
                    <span></span>
                </button>
            </nav>
        </header>

        <div id="menu" class="">
            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="#cid-rTpW4eKEc3">
                            關於我們
                        </a>
                    </li>
                    <li>
                        <a href="#white_section">
                            交通位置
                        </a>
                    </li>
                    <li>
                        <a href="./shop_store">
                            前往商店
                        </a>
                    </li>
                    <li>
                        <a href="#footer">
                            聯絡我們
                        </a>
                    </li>
                </ul>
            </nav>

            <footer class="menu-footer">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/cyplantstore/?ref=br_rs">
                                <i class="fa fa-twitter fa-fw fab fa-facebook-f"></i>
                                千暘植務
                            </a>
                        </li>
                        <li>

                            <a href="https://www.facebook.com/shimmercafetw/?ref=br_rs">
                                <i class="fa fa-envelope fa-fw fab fa-facebook-f"></i>
                                微光寓所
                            </a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>



    </section>
    <section class="cid-rTpW4eKEc3" id="cid-rTpW4eKEc3">
        <figure class="mbr-figure row">
            <div class="banner_plant">
                <a href="/cy_plant">
                    <div class="plant_logo"></div>
                    <div class="banner_mask">
                        <div class="banner_plantTitle">
                            千暘植務
                        </div>
                    </div>
                </a>
            </div>
            <div class="banner_restaurant">
                <a href="/sc_shop">
                    <div class="restaurant_logo"></div>
                    <div class="banner_mask">
                        <div class="banner_restaurantTitle">
                            微光寓所
                        </div>
                    </div>
                </a>
            </div>
        </figure>
    </section>
    <section class="white_section" id="white_section">
        <div class="white_container embed-responsive embed-responsive-16by9" id="map"></div>
    </section>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
        <a style="text-align: center;">
            <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
        </a>
    </div>
    @endsection


    @section('js')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgTZ24YnGy-Sbo7euoeNh4aT5jjSZrFwQ&callback=initMap"></script>
    <script>
        $('.toggle-menu').click(function () {
            $(this).toggleClass('active');
            $('#menu').toggleClass('open');
            $('.cid-rTpW4eKEc3').toggle();
            $('.mbr-section').toggle();
            $('.pagetop_footer').toggle();
        });
        $('.main-nav').click(function () {
            $('.toggle-menu').toggleClass('active');
            $('#menu').toggleClass('open');
            $('.mbr-section').toggle();
            $('.pagetop_footer').toggle();
            $('.cid-rTpW4eKEc3').toggle();

        });

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {
                    lat: 23.965973807059072,
                    lng: 120.97020570000001
                },

                styles: [
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: 23.965973807059072,
                    lng: 120.97020570000001
                },
                icon: {
                    path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
                    strokeColor: '#c00',
                    scale: 8
                },
                map: map
            });
        }
    </script>

@endsection
