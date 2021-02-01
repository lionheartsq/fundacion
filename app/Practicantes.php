<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practicantes extends Model
{
    //
	protected $table = 'practicantes';
	protected $primaryKey = 'idpracticantes';
	public $timestamps = false;

	protected $dates = [
		'fechanacimiento'
	];

	protected $fillable = [
		'documentop',
		'expedicionp',
		'fechanacimiento',
		'nombresp',
		'apellidosp',
		'telefono',
		'email',
		'estado',
		'direccion',
		'ciudad',
		'tipodocumento',
		'eps',
		'universidad',
		'carrera',
		'semestre'
	];

	public function historialp()
	{
		return $this->hasMany(Historialp::class, 'idpracticantes');
	}
}
