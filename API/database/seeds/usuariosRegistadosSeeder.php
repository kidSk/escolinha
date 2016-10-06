<?php

use Illuminate\Database\Seeder;
use cmpn\usuariosRegistados;
class usuariosRegistadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$usersRegist = [
    	[
    	'id'=>'1',
    	'quantidade'=>'1',

    	]
    	];
    	foreach ($usersRegist as $usr) {
    		usuariosRegistados::create($usr);
    	}
    }
}
