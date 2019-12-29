<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPostUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
           // aqui hago referencia a la llave foranea / creo la llave foranea en la tabla comentario vinculando 
            //indico que la llave foranea sera "post_id" y que hace conexion con el "id" de la tabla "post"
            // tambien indico que al eliminar un dato o actualizar no haga nada en cascada
            $table->foreign('post_id')->references('id')->on('post')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_usuario');
    }
}
