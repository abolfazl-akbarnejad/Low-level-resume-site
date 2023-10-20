<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'home')</title>
    @include('admin.layouts.head_tag')
    @yield('style');
</head>

<body>
    <div class="container-scroller">
        @include('admin.layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                @include('admin.layouts.sidebar')

            </nav>
            @yield('container')

        </div>
    </div>

</body>

@include('admin.layouts.scripts')
@yield('script')
@yield('alert')

</html>
