<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('nombre');
            $table->string('abreviatura', 30);
            $table->string('tipoentidad');
            $table->string('nivel');
            $table->string('cif', 12);
            $table->string('estado');
            $table->string('telefonos');
            $table->string('emails');
            $table->string('horarios');
            $table->string('responsable');
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
        Schema::drop('entidads');
    }
}
