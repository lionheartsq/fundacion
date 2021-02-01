<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historiaclinicaamp extends Model
{
    //
	protected $table = 'historiaclinicaamp';
	protected $primaryKey = 'idhistoriaclinicaamp';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $fillable = [
		'motivoconsulta',
		'descripcion',
		'amedicos',
		'afamiliares',
		'apersonales',
		'condiciones',
		'aspectos',
		'observaciones',
		'personal',
		'social',
		'educativa',
		'afectiva',
		'estrategias',
		'observacionesgen',
		'impresion',
		'plan',
		'orientador',
		'cedorientador',
		'idresidentes'
	];
}
