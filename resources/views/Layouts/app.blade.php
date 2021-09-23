<!DOCTYPE html>
<html lang="en">
    @include('Elements._head')
<body>
    <div class="container mt-5">
        @yield('content')
    </div>
    
    @include('Elements._script')
</body>
</html>