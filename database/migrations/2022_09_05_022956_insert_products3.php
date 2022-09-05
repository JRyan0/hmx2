<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat1 = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat1->save();
        $cat2 = new \App\Models\Categoria(['categoria' => 'Masculino']);
        $cat2->save();
        $cat3 = new \App\Models\Categoria(['categoria' => 'Feminino']);
        $cat3->save();
        $cat4 = new \App\Models\Categoria(['categoria' => 'Tênis']);
        $cat4->save();
        $cat5 = new \App\Models\Categoria(['categoria' => 'Infantil']);
        $cat5->save();
        $cat6 = new \App\Models\Categoria(['categoria' => 'Roupas']);
        $cat6->save();

        $prod1= new \App\Models\Produto(['nome'=>'Tênis Nike Kyrie Infinity Basquete', 'valor' => '939.99', 'foto' => 'images/kyrieVermelho.jpg', 'descricao' => '', 'categoria_id' => $cat4->id]);
        $prod1->save();
        $prod2= new \App\Models\Produto(['nome'=>'Tênis Nike Kyrie Infinity', 'valor' => '719.99', 'foto' => 'images/kyrieColorido.jpg', 'descricao' => '', 'categoria_id' => $cat4->id]);
        $prod2->save();
        $prod3= new \App\Models\Produto(['nome'=>'Tênis Nike Kyrie Infinity Azul', 'valor' => '779.99', 'foto' => 'images/kyrieInfinity.jpg', 'descricao' => '', 'categoria_id' => $cat4->id]);
        $prod3->save();
        $prod4= new \App\Models\Produto(['nome'=>'Tênis Nike Kyrie Infinity Rose', 'valor' => '939.99', 'foto' => 'images/kyrieRose.jpg', 'descricao' => '', 'categoria_id' => $cat4->id]);
        $prod4->save();
        $prod5= new \App\Models\Produto(['nome'=>'Tênis Nike Kyrie Low', 'valor' => '679.99', 'foto' => 'images/kyrielow.jpg', 'descricao' => '', 'categoria_id' => $cat4->id]);
        $prod5->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
