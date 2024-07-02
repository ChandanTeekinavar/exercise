<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <title>{{ $title }}</title>

        @include('part.link')
    </head>
    <body>
        @include('layout.navbar-new')

        @include('layout.sidebar-new')
        
        @include('sweetalert::alert')

        @yield('content')

        @include('layout.footer-new')

        @include('part.script')
    </body>
</html>
