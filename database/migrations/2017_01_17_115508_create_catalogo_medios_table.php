<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatalogoMediosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_medios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('tipo');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('unidad_medida');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catalogo_medios');
    }
}
