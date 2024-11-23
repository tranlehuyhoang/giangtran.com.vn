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
<div id="g_id_onload"
     data-client_id="146292703441-4hf46oo2tpm8bret0234lrnljgadlisg.apps.googleusercontent.com"
     data-context="signin"
     data-callback="http://localhost:8000/auth/google/callback"
     data-itp_support="true">
</div>
{{-- @livewire('inc.social-popup') --}}
</html>
