<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="icon" type="image/x-icon" href="/icon.png" />
    @livewireStyles
</head>

<body >
    {{ $slot }}
    @livewireScripts
</body>



@livewire('inc.alert')
@livewire('inc.social-popup')
@livewire('inc.zalo')
@livewire('content.modal-hoa-don')
@livewire('content.modal-alert')
@livewire('content.modal-logout')
</html>
