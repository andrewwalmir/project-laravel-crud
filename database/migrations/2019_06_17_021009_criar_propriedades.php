<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarPropriedades extends Migration
{
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('url');
            $table->text('descricao');
            $table->decimal('preco_aluguel', 11, 2);
            $table->decimal('preco_compra', 11, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('propriedades');
    }
}
