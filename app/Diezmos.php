<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diezmos extends Model
{
    //
	protected $table = 'diezmos';
	protected $primaryKey = 'iddiezmos';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'acumulado' => 'int',
		'idasientos' => 'int'
	];

	protected $fillable = [
		'valorentrada',
		'valorsalida',
		'acumulado',
		'idasientos'
	];
}
