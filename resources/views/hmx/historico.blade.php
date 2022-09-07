@include('base.navbar')
@extends('base.index')

@section('main')
<div class="container">
    <div class="col-12">
        <h3>Minhas Compras</h3>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <tr>
                <th>Data da Compra</th>
                <th>Situação</th>
                <th></th>
            </tr>
            @foreach($lista as $ped)
            <tr>
                <td>{{ $ped->datapedido->format("d/m/Y H:i") }}</td>
                <td>{{ $ped->statusDesc() }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info infocompra"  data-value="{{ $ped->id }}" data-toggle="modal" data-target="#modalcompra">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="modal fade" id="modalcompra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes da Compra</h5>
                </div>
                <div class="modal-body">
                    <div id="conteudopedido"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>

    </div>
</div>
@section('scriptjs')
    <script>
        $(function(){
            $(".infocompra").on('click', function()  {
                let id = $(this).attr("data-value")
                $.ajax({
                    url : "{{ route('compra_detalhes') }}",
                    type : 'post',
                    data : { idpedido : id }
                })
                .done(function(result){
                    $("#conteudopedido").html(result)
                })
                
            })
        })
    </script>
@endsection


@endsection