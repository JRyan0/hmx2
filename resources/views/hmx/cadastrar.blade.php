@include('base.navbar')
@extends('base.index')

@section('main')
<div class="container">
        <div class="row">
            <form action="{{ route('cadastrar_cliente') }}" method="post">
                <div class="mt-3">
                    <h2 class="d-flex justify-content-center"style="padding-bottom: 40px; ">Cadastro</h2>
                    <form >
                    @csrf    
                    <div class="row">    
                            <div class="col-6">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu Nome Completo', 'name' => 'nome', 'label' => 'Nome Completo', 'value' => ''])
                            </div>
                            <div class="col-6">
                                @include('components.field', ['type' => 'email', 'placeholder' =>'Escreva seu Email', 'name' => 'email', 'label' => 'Email', 'value' => ''])
                            </div>
                            <div class="col-6">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu CPF', 'name' => 'cpf', 'label' => 'CPF', 'value' => ''])
                            </div>
                            <div class="col-6">
                                @include('components.field', ['type' => 'password', 'placeholder' =>'Escreva sua Senha', 'name' => 'password', 'label' => 'Senha', 'value' => ''])
                            </div>
                            <div class="col-8">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu Endereço', 'name' => 'endereco', 'label' => 'Endereço', 'value' => ''])
                            </div>
                            <div class="col-1">
                                @include('components.field', ['type' => 'number', 'placeholder' =>'', 'name' => 'numero', 'label' => 'Número', 'value' => ''])
                            </div>
                            <div class="col-3">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Complemento', 'name' => 'complemento', 'label' => 'Complemento', 'value' => ''])
                            </div>
                            <div class="col-4">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva sua Cidade', 'name' => 'cidade', 'label' => 'Cidade', 'value' => ''])
                            </div>
                            <div class="col-4">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu CEP', 'name' => 'cep', 'label' => 'CEP', 'value' => ''])
                            </div>
                            <div class="col-4">
                                @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu Estado', 'name' => 'estado', 'label' => 'Estado', 'value' => ''])
                            </div>
                            <div class="col-12" style="margin-top:30px">
                                @include('components.button', ['type' => 'submit','style' => 'margin:auto; width:100%;', 'color' => 'dark', 'label' => 'Cadastre-se'])
                            </div>
                        </div>
                    </form>
                </div>
            </form>
    </div>
</div>
    @include('base.carrinhoClose')
    @include('base.footer')
@endsection
