@extends('base.index')

@section('container')

<form>
    <div class="container mt-3">
        <h2 class="d-flex justify-content-center"style="padding-bottom: 40px; ">Login</h2>
        <form action="backend/validacao.php" method="post">
        <div class="form-floating mb-1 mt-1">
            @include('components.field', ['type' => 'text', 'placeholder' =>'', 'name' => 'email', 'label' => 'Email', 'value' => ''])

        </div>
        <div class="form-floating mt-3 mb-3">
            @include('components.field', ['type' => 'password', 'placeholder' =>'Senha', 'name' => 'senha', 'label' => 'Senha', 'value' => ''])

        </div>
        <button type="submit" value="entrar" class="btn btn-dark" style=" margin:auto; width:100%; ">Iniciar Sessão</button>
        </form>
    </div>
</form>



@endsection
