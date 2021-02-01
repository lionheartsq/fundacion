<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conceptos extends Model
{
    //
	protected $table = 'conceptos';
	protected $primaryKey = 'idconceptos';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

}
