<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">
    <link rel="icon" href="/icon.png">
    <meta name="google-site-verification" content="F6YQKXRzp2CQXZQnFrTo3gAeBHesT0q5ZygwwbutBns" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
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
<div class="zalo-chat-widget" data-oaid="1715225565559061022" data-welcome-message="GIANGTRAN.COM.VN" data-autopopup="0"
    data-width="100" data-height="200"></div>
@livewire('inc.social-popup')

</html>
