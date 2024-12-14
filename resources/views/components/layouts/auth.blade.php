<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <meta name="google" content="notranslate">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:url" content="{{ url('/') }}">
    <meta name="google-site-verification" content="W1Wf5_b9Yoc5PaKmRkfDJB0bzRUGDkcn2rDUhja0skU" />
    <link rel="shortcut icon" href="{{ asset('/logo/icon.png') }}" type="image/png">

    <meta name="description"
        content="Thiết kế website bán hàng, công ty, giao diện đẹp, chuyên nghiệp, hỗ trợ nhiệt tình 24/7. Công ty thiết kế web bán hàng, web doanh nghiệp uy tín, chất lượng, kinh nghiệm nhiều năm. 10+ năm kinh nghiệm. Nhân viên chuyên nghiệp.">
    <meta name="twitter:image" content="{{ asset('logo/banner.png') }}" /> <!-- Add your image path here -->
    <meta property="og:image" content="{{ asset('logo/banner.png') }}">
    <meta property="og:image" itemprop="thumbnailUrl" content="{{ asset('logo/banner.png') }}">



        <link rel="stylesheet" href="/assets/static/style.css?v=2097735562">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=758177082">
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
        <script defer src="/assets/static/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="/assets/static/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="/assets/static/style.css?v=62348332">
        <script src="/assets/static/script.js"></script>
        <style>
            .loading-bar {
            width: 100%;
            height: 3px;
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            background: #dee2e6;
        }
         .loading-bar:before {
            content: "";
            width: 35px;
            height: 3px;
            background: #1062fe;
            position: absolute;
            left: -34px;
            -webkit-animation: bluebar 1.5s infinite ease;
            animation: bluebar 1.5s infinite ease;
        }
        @-webkit-keyframes bluebar {
            50% {
                left: 96px
            }
        }

        @keyframes bluebar {
            50% {
                left: 96px
            }
        }

        </style>
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>


<!-- Google tag (gtag.js) -->

@livewire('inc.social-popup')
<script>
    $(".loader-wrapper").fadeOut("slow", function() {
        $(this).remove();
    });
</script>

</html>
