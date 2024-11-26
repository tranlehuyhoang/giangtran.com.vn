<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
</body>



@livewire('inc.alert')
@livewire('inc.social-popup')
@livewire('inc.zalo')
@livewire('content.modal-hoa-don')

</html>
