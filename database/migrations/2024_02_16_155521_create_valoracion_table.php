<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Valoraciones extends Migration
{
    public function up()
    {
        Schema::create('Valoraciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('RestauranteID');
            $table->foreign('RestauranteID')->references('ID')->on('Restaurantes');
            $table->unsignedBigInteger('UsuarioID');
            $table->foreign('UsuarioID')->references('ID')->on('Usuarios');
            $table->integer('Calificacion');
            $table->text('Comentario')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Valoraciones');
    }
}