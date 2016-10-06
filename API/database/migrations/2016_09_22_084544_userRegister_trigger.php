<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRegisterTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER usariosRegistados AFTER INSERT ON users 
            FOR EACH ROW 
            BEGIN
            UPDATE usuarios_registados SET quantidade=quantidade+1 WHERE id=1;
            END
            ');

        DB::unprepared('CREATE TRIGGER usariosRegistados2 AFTER DELETE ON users 
            FOR EACH ROW 
            BEGIN
            UPDATE usuarios_registados SET quantidade=quantidade-1 WHERE id=1;
            END
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER usariosRegistados');
        DB::unprepared('DROP TRIGGER usariosRegistados2');
    }
}
