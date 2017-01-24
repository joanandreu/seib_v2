<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCargosEntidadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_entidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_entidads_id')->unsigned();
            $table->string('cargo');
            $table->string('abrv');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_entidads_id')->references('id')->on('tipo_entidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargos_entidads');
    }
}
