<!DOCTYPE html>
<html lang="pt-BR">
@include('base.header', ['title' => 'Hemmaxay'])
<body>

@if(\Auth::user())
    <div class="col-12">
        <p class="text-right"> Seja bem vindo, {{ \Auth::user()->nome }}</p>
    </div>


@endif
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
