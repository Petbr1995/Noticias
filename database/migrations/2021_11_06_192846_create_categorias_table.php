<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noticia_id')->nullable();
            $table->foreign('noticia_id')
            ->references('id')
            ->on('noticias')
            ->onUpdate('restrict')
            ->onDelete('restrict');

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')
            ->references('id')
            ->on('categorias')
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
