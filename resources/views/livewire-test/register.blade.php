<html>

<head>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
</head>

<body>
    Livewire-Test <span class="text-pink-300">register</span>
    {{-- <livewire:counter /><BR> --}}
    @livewire('register')
    @livewireScripts
</body>

</html>
