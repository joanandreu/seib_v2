<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedioRecursosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medio_recursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entidad');
            $table->string('tipo_medio');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('valor');
            $table->string('medida');
            $table->string('tipo_riesgo');
            $table->string('modelo');
            $table->string('matricula');
            $table->string('transporte');
            $table->string('grua');
            $table->string('responsable');
            $table->string('contacto');
            $table->string('municipio');
            $table->string('nucleo');
            $table->string('calle');
            $table->string('ine_via');
            $table->string('numero');
            $table->string('piso');
            $table->string('puerta');
            $table->string('escalera');
            $table->string('lon');
            $table->string('lat');
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
        Schema::drop('medio_recursos');
    }
}
