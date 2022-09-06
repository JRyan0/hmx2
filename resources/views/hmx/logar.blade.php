@include('base.navbar')
@extends('base.index')

@section('main')
    <div class="container">
        <form action="{{ route('logar') }}" method="post">
            <div class="container mt-3">
                <h2 class="d-flex justify-content-center"style="padding-bottom: 40px; ">Login</h2>
                <form >
                    @csrf
                    @include('components.field', ['type' => 'text', 'placeholder' =>'Email', 'name' => 'emailCadastro', 'label' => 'Email', 'value' => ''])

                    @include('components.field', ['type' => 'password', 'placeholder' =>'Senha', 'name' => 'password', 'label' => 'Senha', 'value' => ''])

                    @include('components.button', ['type' => 'submit','style' => 'margin:auto; width:100%;', 'color' => 'dark', 'label' => 'Iniciar Sessão'])
                </form>
            </div>
        </form>
    </div>
    @include('base.carrinhoClose')
    @include('base.footer')
@endsection
