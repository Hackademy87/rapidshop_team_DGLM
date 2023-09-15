<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f571261d1b.js" crossorigin="anonymous"></script>
    <title>{{$title ?? 'rapidshop'}}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar/>
<div class="min-vh-100 slot">
    {{ $slot }}
</div>
    <x-footer></x-footer>
    @livewireScripts
</body>

</html>