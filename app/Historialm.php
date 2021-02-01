<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialm extends Model
{
    //
	protected $table = 'historialm';
	protected $primaryKey = 'idhistorialm';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaexamen'
	];

	protected $fillable = [
		'enfermedades',
		'fechaexamen',
		'estadosalud',
		'vacunas',
		'diagnosis',
		'medicamentos',
		'alergias',
		'hospitalizado',
		'descripcion',
		'idresidentes'
	];
}
