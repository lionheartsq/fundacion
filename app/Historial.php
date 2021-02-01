<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
	protected $table = 'historial';
	protected $primaryKey = 'idhistorial';
	public $timestamps = false;

	protected $casts = [
		'tiempoadiccion' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso'
	];

	protected $fillable = [
		'fechaingreso',
		'motivoi',
		'tiempoadiccion',
		'medidatiempo',
		'drogasusadas',
		'problemas',
		'carcel',
		'fundaciones',
		'motivos',
		'referido',
		'orientador',
		'cedorientador',
		'idresidentes'
	];
}
