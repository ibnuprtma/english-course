<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>English Course</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('landing-page.includes.header-script')
</head>

<body>
    @include('landing-page.includes._navbar')

    @yield('content')

    @include('landing-page.includes._footer')

    @include('landing-page.includes.footer-script')
</body>

</html>