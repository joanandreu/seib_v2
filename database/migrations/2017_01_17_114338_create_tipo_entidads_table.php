<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoEntidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_entidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('tipo');
            $table->string('abreviatura');
            $table->string('tipo_funcional');
            $table->string('cargos');
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
        Schema::drop('tipo_entidads');
    }
}
