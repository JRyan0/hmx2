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
