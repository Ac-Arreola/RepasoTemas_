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
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('idLibro');
            $table->string('isbnLibro');
            $table->string('tituloLibro');
            
            $table->string('paginasLibro');
            $table->string('editorialLibro');
            $table->string('emailLibro'); 
            $table->bigInteger('autorLibro')->unsigned();
            $table->integer('autorLibro')->references('idAutor')->ontable('tb_autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
