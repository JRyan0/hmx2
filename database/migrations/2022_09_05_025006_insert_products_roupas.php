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
        $prod1= new \App\Models\Produto(['nome'=>'Camiseta Nike Brasil II 2022/23', 'valor' => '249.99', 'foto' => 'images/kyrieVermelho.jpg', 'descricao' => '', 'categoria_id' => '6']);
        $prod1->save();
        $prod2= new \App\Models\Produto(['nome'=>'Camiseta Nike Brasil I 2022/23', 'valor' => ' 249.99', 'foto' => 'images/kyrieColorido.jpg', 'descricao' => '', 'categoria_id' => '6']);
        $prod2->save();
        $prod3= new \App\Models\Produto(['nome'=>'Camisa Nike Corinthians II 2022/23', 'valor' => '249.99', 'foto' => 'images/kyrieInfinity.jpg', 'descricao' => '', 'categoria_id' => '6']);
        $prod3->save();
        $prod4= new \App\Models\Produto(['nome'=>'Camiseta Nike UV Hydroguard Feminina', 'valor' => '229.99', 'foto' => 'images/kyrieRose.jpg', 'descricao' => '', 'categoria_id' => '6']);
        $prod4->save();
        $prod5= new \App\Models\Produto(['nome'=>'Camiseta Nike Dri-FIT One Feminina', 'valor' => '119.99', 'foto' => 'images/kyrielow.jpg', 'descricao' => '', 'categoria_id' => '6']);
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
