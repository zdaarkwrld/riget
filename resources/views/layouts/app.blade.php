<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-secondary">
        {{-- alerts --}}
        @if (session('success'))
            <div id="successMessage"
                class="justify-center bg-green-500 py-1 text-base text-center text-white bg-opacity-80 font-lexend">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div id="errorMessage"
                class="justify-center bg-red-500 py-1 text-base text-center text-white bg-opacity-80 font-lexend">
                {{ session('error') }}
            </div>
        @endif

        @if (session('warn'))
            <div id="warnNotification"
                class="justify-center bg-orange-500 py-1 text-base text-center text-default-white bg-opacity-100 font-lexend">
                {{ session('warn') }}
            </div>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set timeout to hide the success message after 5 seconds
                setTimeout(function() {
                    var successMessage = document.getElementById('successMessage');
                    if (successMessage) {
                        successMessage.style.display = 'none';
                    }

                    // Set timeout to hide the error message after 5 seconds
                    var errorMessage = document.getElementById('errorMessage');
                    if (errorMessage) {
                        errorMessage.style.display = 'none';
                    }
                }, 5000);
            });
        </script>
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </div>
</body>

</html>
