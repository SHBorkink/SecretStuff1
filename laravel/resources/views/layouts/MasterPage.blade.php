<!DOCTYPE html>
<html>
@include('includes.head')
<body>
<div class="container">
    <header class="row">
        @include('includes.navbar')
    </header>
    <div id="main" class="row">
            @yield('content')
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>