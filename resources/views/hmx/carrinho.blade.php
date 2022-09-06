@extends('base.index')
@include('base.navbar')
@section('main')
   
    <div class="container " style="margin-top:30px">
        <div class="row">
            @if(isset($cart) && count($cart) > 0)
                <table class="table">
                    <thead>
                        <th></th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                    </thead>  
                    <tbody>
                        @foreach($cart as $indice => $p)
                            <tr>
                                <td>
                                    <a href="{{ route('carrinho_excluir', ['indice' => $indice]) }}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>    
                                
                                </td>
                                <td>{{ $p->nome }}</td>
                                <td><img src="{{ asset($p->foto) }}" height="50"/></td>
                                <td>{{ $p->valor }}</td>
                                <td>{{ $p->descricao }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div class="alert alert-danger">
                <p class="carrinhoTitulo">Nenhum item no carrinho</p>
            </div>
        @endif
        </div>
    </div>

@include('base.footer')
@endsection