<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historiaclinicap extends Model
{
    //
	protected $table = 'historiaclinicap';
	protected $primaryKey = 'idhistoriaclinicap';
	public $timestamps = false;

	protected $casts = [
		'lugarnacimiento' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso'
	];

	protected $fillable = [
		'genero',
		'lugarnacimiento',
		'fechaingreso',
		'remitido',
		'motivoconsulta',
		'descripcion',
		'amedicos',
		'afamiliares',
		'apersonales',
		'condiciones',
		'aspectos',
		'tipologia',
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
