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





    <link rel="stylesheet" href="/assets/static/style.css?v=1822759336">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>
    <link id="googleidentityservice" type="text/css" media="all" href="https://accounts.google.com/gsi/style"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/assets/static/style.css?v=100766406">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
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

    <script  src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
    <script  src="/assets/static/simplebar.js"></script>
    <script  src="/assets/static/invoices.js?v=1731409673" ></script>
    <script  src="/assets/static/jquery.min.js"></script>
    <script  src="/assets/static/config.js"></script>
    <script  src="/assets/static/cyberlux.js"></script>
    <script  src="/assets/static/handlebars.min.js"></script>
    <script  src="/assets/static/jquery.dataTables.min.js"></script>
    <script  src="/assets/static/datatable.custom.js"></script>
    <script  src="/assets/static/bundle.min.js"></script>
    <script  src="/assets/static/feather.min.js"></script>
    <script  src="/assets/static/bootstrap.bundle.min.js"></script>
    <script  src="/assets/static/feather.min.js"></script>
    <script  src="/assets/static/feather-icon.js"></script>
    <script  src="/assets/static/custom.js"></script>
    <script  src="/assets/static/swiper-bundle.min.js"></script>
    <script  src="/assets/static/sidebar-menu.js"></script>
    <script  src="/assets/static/sidebar-pin.js"></script>
    <script  src="/assets/static/bootstrap-notify.min.js"></script>
    <script  src="/assets/static/index.js"></script>
    <script  src="/assets/static/custom_touchspin.js"></script>
    <script  src="/assets/static/simple-datatable.js"></script>
    <script  src="/assets/static/handlebars.js"></script>
    <script  src="/assets/static/typeahead.bundle.js"></script>
    <script  src="/assets/static/typeahead.custom.js"></script>
    <script  src="/assets/static/search-handlebars.js"></script>
    <script  src="/assets/static/script.js"></script>
    <script  src="/assets/static/customizer.js"></script>
    <script src="/assets/static/profile-option.js" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

</body>


@livewire('inc.social-popup')
@livewire('inc.alert')
@livewire('inc.zalo')
@livewire('content.modal-hoa-don')
@livewire('content.modal-alert')
@livewire('content.modal-logout')


</html>
