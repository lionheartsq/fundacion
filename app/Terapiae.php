<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapiae extends Model
{
    //
	protected $table = 'terapiae';
	protected $primaryKey = 'idterapiae';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idusuarios' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'resumen',
		'evaluacion',
		'tecnicas',
		'tarea',
		'idresidentes',
		'idusuarios'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idusuarios');
	}
}
