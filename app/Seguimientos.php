<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimientos extends Model
{
    //
	protected $table = 'seguimientos';
	protected $primaryKey = 'idseguimientos';
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

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}
}
