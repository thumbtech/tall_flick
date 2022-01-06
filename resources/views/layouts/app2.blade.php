<!doctype html>
<html>

<head>
    <title>Our Lost Thread</title>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    @stack('styles')
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @stack('scripts')
    @livewireScripts
</body>

</html>