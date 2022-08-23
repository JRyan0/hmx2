<!DOCTYPE html>
<html lang="pt-BR">
@include('base.header', ['title' => 'Hemmaxay'])
<body>
    @include('base.navbar')
    <div class="container">
        @yield('container')
    </div>

    @include('base.footer')
</body>
</html>
