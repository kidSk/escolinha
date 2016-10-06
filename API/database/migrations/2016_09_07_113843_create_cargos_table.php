<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->SoftDeletes();
            $table->timestamps();
        });
 /*       Schema::table('cargos',function($table){
            $table->integer('idDep')->unsigned();
            $table->foreign('idDep')->references('id')->on('departamento')
            ->onDelete('cascade')->onUpdate('cascade');
        });
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargos');
    }
}
