<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" type="image/x-icon" href="/logo/icon.png" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="XdpPCe9WLWMZA9pEynO-7B7lRoimKZl7qFlCqvZsVlo">
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="-1">
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/assets/static/style.css?v=100766406">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

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
</body>


@livewire('inc.social-popup')
@livewire('inc.alert')
@livewire('inc.zalo')
@livewire('content.modal-hoa-don')
@livewire('content.modal-alert')
@livewire('content.modal-logout')


</html>
