<!doctype html>
<html lang="en">
@yield('head')


<body>
    @include('layout.header')
    <div class="container-fluid">
        <div class="row">

            @include('layout.sidebar')
            @yield('content')
        </div>
    </div>
    @include('layout.script')
    @yield('scriptextra')
</body>

</html>