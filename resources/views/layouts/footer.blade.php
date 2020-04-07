<!DOCTYPE html>

<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <!-- <link rel="shortcut icon" href="assets/images/mbr-122x116.png" type="image/x-icon"> -->
    <meta name="description" content="Web Site Builder Description">


    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    @yield('css')


</head>

<body>

    @yield('content')

    <footer class=pagetop_footer>
        <div class="footer_container" id="footer">

            <div class="footer_logo">
                <a href="/cy_plant"><img src="{{asset('/img/cy_plant/cy_logo_big.png')}}" alt=""></a>
            </div>

            <div class="footer_logo">
                <a href="/sc_shop"><img src="{{asset('/img/sc_shop/sc_logo_big.png')}}" alt=""></a>
            </div>
            <div class="footer_contact">

                <div class="social_media">
                    <a href="https://www.facebook.com/shimmercafetw/">
                        <div class="fblogo"></div>
                    </a>

                    <a href="https://www.instagram.com/shimmercafetw/">
                        <div class="iglogo"></div>
                    </a>


                </div>
                <div class="phpone">
                    <div class="phpone_number">
                        聯絡方式: 04 9299 0037
                    </div>

                </div>
                <div class="business_hour">
                    營業時段: 07:30 ~ 14:00
                </div>
                <div class="address">
                    地址: 南投縣埔里鎮東榮路220號, Puli, T'Ai-Wan, Taiwan
                </div>
            </div>
            <div class="white_line"></div>
            <div class="footer_copyright">
                COPYRIGHT ©2020 中興大學Python職訓班 ALLRIGHTS RESERVED.
            </div>
        </div>
    </footer>

    <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/tether/tether.min.js')}}"></script>
    <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/nav-dropdown.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>
    <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{asset('assets/mbr-tabs/mbr-tabs.js')}}"></script>
    <script src="{{asset('assets/theme/js/script.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    @yield('js')

</body>

</html>
