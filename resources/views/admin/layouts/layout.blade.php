<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OH Admin | {{ $tabTitle }}</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/toggleNav.js') }}"></script>
</head>

<body>
    @include('admin.includes.navigation')
    <div class="lg:ms-64 h-screen">
        @yield('content')
    </div>
</body>

</html>