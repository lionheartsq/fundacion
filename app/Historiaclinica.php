<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historiaclinica extends Model
{
    //
	protected $table = 'historiaclinica';
	protected $primaryKey = 'idhistoriaclinica';
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

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}

	public function ciudades()
	{
		return $this->belongsTo(Ciudades::class, 'lugarnacimiento');
	}
}
