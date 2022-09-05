<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Categoria;
use \App\Models\Produto;

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
        return view("hmx/index");
    }
    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];

        return view("hmx/carrinho", $data);


    }
}
