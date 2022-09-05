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
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $prod1= new \App\Models\Produto(['nome'=>'Produto de Cria', 'valor' => '10', 'foto' => 'images/kyrieVermelho.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod1->save();
        $prod2= new \App\Models\Produto(['nome'=>'Produto de Cria', 'valor' => '10', 'foto' => 'images/kyrieColorido.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();
        $prod3= new \App\Models\Produto(['nome'=>'Produto de Cria', 'valor' => '10', 'foto' => 'images/kyrieInfinity.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();
        $prod4= new \App\Models\Produto(['nome'=>'Produto de Cria', 'valor' => '10', 'foto' => 'images/kyrieRose.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();
        $prod5= new \App\Models\Produto(['nome'=>'Produto de Cria', 'valor' => '10', 'foto' => 'images/kyrielow.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
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
