<!DOCTYPE html>
<html lang="pt-BR">
@include('base.header', ['title' => 'Hemmaxay'])
<body>
@if($message = Session::get("err"))
<div class="col-12">
    <div class="alert alert-danger">{{$message}}</div>
</div>
@endif
@if($message = Session::get("ok"))
<div class="col-12">
    <div class="alert alert-success">{{$message}}</div>
</div>
@endif
    <div class="main">
        @yield('main')
    </div>

    @include('base.footer')
</body>
</html>
