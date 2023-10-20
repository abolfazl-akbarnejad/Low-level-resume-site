<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('auth.layouts.head_tag')
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    @yield('container')
</body>

@include('auth.layouts.scripts')
@yield('sctipt')

</html>
