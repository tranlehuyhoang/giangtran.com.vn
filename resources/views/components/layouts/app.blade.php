<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">
    <link loading="lazy" rel="icon" href="/icon.png">
    <meta name="google-site-verification" content="F6YQKXRzp2CQXZQnFrTo3gAeBHesT0q5ZygwwbutBns" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>

    @livewireStyles
</head>

<body>

    {{ $slot }}

    @livewireScripts
    <!-- Plugin used-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
</body>
<div id="g_id_onload" data-client_id="1040772401360-g5u4ooibpqu3n7n31so5uo4q39abiisl.apps.googleusercontent.com"
    data-context="signin" data-csrf_token="{{ csrf_token() }}" data-ux_mode="popup" data-callback="googleLogin"
    data-itp_support="true">
</div>

<div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline" data-text="signin_with"
    data-size="large" data-logo_alignment="left">
</div>

<script>
    function googleLogin(response) {
        // Ghi log toàn bộ response vào console
        console.log(response);

        // Gọi hàm parseJwt để phân tích token credentials từ response
        console.log(parseJwt(response.credential));
    }

    function parseJwt(token) {
        var base64Url = token.split('.')[1];
        var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));

        return JSON.parse(jsonPayload);
    }
</script>
{{-- @livewire('inc.social-popup') --}}

</html>
