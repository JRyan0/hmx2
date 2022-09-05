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
        $cat = new \App\Models\Categoria(['categoria' => 'Masculino']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Feminino']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Lancamento']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Infantil']);
        $cat->save();
        $cat = new \App\Models\Categoria(['categoria' => 'Ofertas']);
        $cat->save();
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
