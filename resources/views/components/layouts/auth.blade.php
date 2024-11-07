<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/mofi/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/mofi/assets/css/responsive.css">
    @livewireStyles
</head>

<body>
    <div class="loader-wrapper" wire:navigating>
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    {{ $slot }}

    @livewireScripts
    <script src="/mofi/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/mofi/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/mofi/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/mofi/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="/mofi/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- calendar js-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/mofi/assets/js/script.js"></script>
    <script src="/mofi/assets/js/script1.js"></script>
    <!-- Plugin used-->
    <script>
        setTimeout(function() {
                          $(".loader-wrapper").fadeOut(1, function() {
                              $(this).remove();
                          });
                      }, 1500); // Giữ nguyên trong 3 giây trước khi bắt đầu làm mờ
                          new WOW().init();
    </script>
</body>

</html>