<!doctype html>
<html>

<head>
    <title>Our Lost Thread</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('styles')
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @stack('scripts')
    @livewireScripts
</body>

</html>