<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Efectivo extends Model
{
    //
	protected $table = 'efectivo';
	protected $primaryKey = 'idefectivo';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'acumulado' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'concepto',
		'valorentrada',
		'valorsalida',
		'acumulado'
	];
}
