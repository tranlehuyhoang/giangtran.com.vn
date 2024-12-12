<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" type="image/x-icon" href="/logo/icon.png" />

    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="XdpPCe9WLWMZA9pEynO-7B7lRoimKZl7qFlCqvZsVlo">
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
