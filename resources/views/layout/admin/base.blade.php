<!doctype html>
<html lang="en">
@include('layout.admin.head')
<body>
    @include('layout.admin.header')
    <div class="container-fluid">
        <div class="row">
            @include('layout.admin.sidebar')
            @yield('content')
        </div>
    </div>
    @include('layout.admin.script')
    @yield('scriptextra')
</body>
</html>