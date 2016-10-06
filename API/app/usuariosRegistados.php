<?php

namespace cmpn;

use Illuminate\Database\Eloquent\Model;

class usuariosRegistados extends Model
{
	protected $table='usuarios_registados';
	protected $fillable = ['id', 'quantidade'];
}
