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
            $table->increments('idLibro');
            $table->string('isbnLibro');
            $table->string('tituloLibro');
            $table->string('autorLibro');
            $table->string('paginasLibro');
            $table->string('editorialLibro');
            $table->string('emailLibro'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
