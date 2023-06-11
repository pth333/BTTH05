<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href = "{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <!-- Header giống nhau -->
    @include('layouts.header')
    <!-- Main Content khác nhau -->
    <div class="container-fluid">
        @yield('main')
    </div>
    <!-- Footer Giống nhau -->
    @include('layouts.footer')
    <script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>