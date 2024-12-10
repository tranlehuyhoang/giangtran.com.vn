<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" type="image/x-icon" href="/logo/icon.png" />

    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="XdpPCe9WLWMZA9pEynO-7B7lRoimKZl7qFlCqvZsVlo">

    @livewireStyles
</head>

<body>

    {{ $slot }}
    @livewireScripts
</body>


<!-- Google tag (gtag.js) -->



</html>
