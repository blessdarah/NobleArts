<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('partials.header-scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="8.907.0"
    data-gr-ext-installed="">
    @include('partials.navbar')
    {{ $slot }}
    @include('partials.footer')
    @include('partials.footer-scripts')
</body>

</html>
