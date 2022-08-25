@extends('base.index')

@section('container')

<form>
    <div class="container mt-3">
        <h2 class="d-flex justify-content-center"style="padding-bottom: 40px; ">Login</h2>
        <form action="backend/validacao.php" method="post">
            
            @include('components.field', ['type' => 'text', 'placeholder' =>'Usuário', 'name' => 'usuario', 'label' => 'Usuário', 'value' => ''])

            @include('components.field', ['type' => 'password', 'placeholder' =>'Senha', 'name' => 'senhaLogin', 'label' => 'Senha', 'value' => ''])

            @include('components.button', ['type' => 'submit','style' => 'margin:auto; width:100%;', 'color' => 'dark', 'label' => 'Iniciar Sessão'])
        </form>
    </div>
</form>

    @include('base.carrinhoClose')
    @include('base.footer')
@endsection
