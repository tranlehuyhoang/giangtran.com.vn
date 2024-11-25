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
    <link rel="canonical" href="{{ request()->fullUrl() }}">
    <meta name="google-site-verification" content="F6YQKXRzp2CQXZQnFrTo3gAeBHesT0q5ZygwwbutBns" />

    @livewireStyles
</head>

<body>

    {{ $slot }}

    @livewireScripts
    <!-- Plugin used-->

</body>
@livewire('inc.alert')
@livewire('inc.social-popup')
@livewire('inc.zalo')

</html>
