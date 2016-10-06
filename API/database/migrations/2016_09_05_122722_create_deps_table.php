<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('departamento', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->unique('name');
        $table->string('responsavel');
        $table->SoftDeletes();
        $table->timestamps();
    });
       
       
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('departamento');
   }
}
