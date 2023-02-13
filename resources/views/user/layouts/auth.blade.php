<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @notifyCss
    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/jquery-ui.min.css') }}">
    @stack('css')
</head>

<body>
    {{-- navbar --}}
    @include('user.layouts.navbar')
    {{-- main/content --}}
    <main>
        <x:notify-messages />
        <div class="flex w-full gap-x-2">
            <div class="p-2 w-2/12 h-screen overflow-y-auto bg-base-200">
                @include('user.layouts.sidebar')
            </div>
            <div class="w-10/12 p-2">
                <h1 class="text-2xl font-semibold">{{ $pageTitle ?? 'Page Title' }}</h1>
                @yield('content')
            </div>
        </div>
    </main>

    @notifyJs
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    {{-- <script>
        let submits = document.querySelector("input[type=submit], button[type=submit]");
        if (submits) {
            submits.addEventListener("click",
                function() {
                    this.classList.add("loading");
                });
        }
    </script> --}}
    @stack('js')
</body>

</html>
