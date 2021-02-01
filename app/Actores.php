<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    //
	protected $table = 'actores';
	protected $primaryKey = 'idactores';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
