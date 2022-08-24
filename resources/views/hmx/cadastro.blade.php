@extends('base.index')

@section('container')

    <form>
        <div class="mt-3">
            <h2 class="d-flex justify-content-center"style="padding-bottom: 40px; ">Cadastro</h2>
            <form action="/action_page.php">
                
                    @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu Nome Completo', 'name' => 'nome', 'label' => 'Nome Completo', 'value' => ''])


                    @include('components.field', ['type' => 'email', 'placeholder' =>'Escreva seu Email', 'name' => 'email', 'label' => 'Email', 'value' => ''])
               
              
                    @include('components.field', ['type' => 'text', 'placeholder' =>'Escreva seu Usuário', 'name' => 'usuario', 'label' => 'Usuário', 'value' => ''])
                
                
                    @include('components.field', ['type' => 'password', 'placeholder' =>'Escreva sua Senha', 'name' => 'senha', 'label' => 'Senha', 'value' => ''])
              
                    @include('components.field', ['type' => 'password', 'placeholder' =>'Escreva sua Senha', 'name' => 'senhaC', 'label' => 'Confirme sua Senha', 'value' => ''])

                    @include('components.button', ['type' => 'submit','style' => 'margin:auto; width:100%;', 'color' => 'dark', 'label' => 'Cadastre-se'])
            </form>
        </div>
    </form>
    @include('base.carrinhoClose')
    @include('base.footer')
@endsection
