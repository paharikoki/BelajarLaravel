<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    @include('layouts.partials.navbar')
    <div class="container">
        @yield('container')
    </div>
</body>

</html>
