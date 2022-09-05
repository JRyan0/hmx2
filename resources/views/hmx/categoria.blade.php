@extends('base.index')
@include('base.navbar')
@section('main')

    @include('base.carrinhoClose')
   
    <div class="container">
        <div class="row">
        @if(isset($lista) && count($lista) > 0)
            @foreach($lista as $prod)
                <div class="col-3 mb-3">
                        <div class="card">
                            <img src="{{ asset($prod->foto) }}" class="card-img-top" />
                            <div class="card-body">
                                <h6 class="card-title">{{$prod->nome}} - {{$prod->valor}}</h6>
                                <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id]) }}" class="btn btn-sm btn-secondary">Adicionar Item</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        @endif
        </div>
    </div>

@include('base.footer')
@endsection