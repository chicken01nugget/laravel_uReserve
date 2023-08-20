<html>

<head>
    @livewireStyles
</head>

<body>
    Livewire-Test
    <div>
        @if (session()->has('message'))
        <div class="">
            {{ session('message') }}
        </div>
        @endif
    </div>
    {{-- <livewire:counter /><BR> --}}
    @livewire('counter')
    @livewireScripts
</body>

</html>
