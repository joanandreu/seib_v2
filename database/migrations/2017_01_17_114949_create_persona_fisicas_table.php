<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonaFisicasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_fisicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('entidad');
            $table->string('cargo');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nif');
            $table->string('estado');
            $table->string('telefonos');
            $table->string('horarios');
            $table->string('emails');
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
        Schema::drop('persona_fisicas');
    }
}
