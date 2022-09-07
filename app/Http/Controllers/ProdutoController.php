<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Categoria;
use App\Models\ItensPedido;
use App\Models\Pedido;
use \App\Models\Produto;
use App\Services\VendaService;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data =[];
        //Buscar todos os produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("hmx/produtos", $data);
    }
    public function categoria($idcategoria = 0, Request $request){
        $data =[];
        
        $listarCategorias = Categoria::all();

        $queryProduto = Produto::limit(16);

        if($idcategoria != 0){
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProduto = $queryProduto->get();

        $data["lista"] = $listaProduto;
        $data["listaCategoria"] = $listarCategorias;
        return view("hmx/categoria", $data);
    }
    public function adicionarCarrinho($idProduto = 0, Request $request){
        $prod = Produto::find($idProduto);
        if($prod){
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);

            session(['cart' => $carrinho]);

        }
        return back();
    }
    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];

        return view("hmx/carrinho", $data);


    }
    public function excluirCarrinho($indice, Request $request){
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        };
        session(["cart" => $carrinho]);
        return back();
    }
    public function finalizar(Request $request){
        $prods = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods, Auth::user());
        if($result["status"] == "ok"){
            $request->session()->forget("cart");
        }
        
        $request->session()->flash($result["status"], $result["message"]);
        return redirect()->route("ver_carrinho");
    }
    public function historico(Request $request){
        $data = [];
        
        $idusuario = Auth::user()->id;
        $listaPedido = Pedido::where("usuario_id", $idusuario)->orderBy("datapedido", "desc")->get();
        $data["lista"] = $listaPedido;

        return view("hmx/historico", $data);
    }
    public function detalhes(Request $request){
        $idpedido = $request->input("idpedido");
        
        $listaItens = ItensPedido::join("produtos", "produtos.id", "=", "itens_pedidos.produto_id")
        ->where("pedido_id", $idpedido)
        ->get(['itens_pedidos.*', 'itens_pedidos.valor as valoritem', 'produtos.*']);

        $data = [];
        $data["listaItens"] = $listaItens;
        return view("hmx/detalhes", $data);
    }
    public function pagar(Request $request){
        $data = [];

        return view("hmx/pagar", $data);
    }
}
