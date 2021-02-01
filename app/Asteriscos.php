<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asteriscos extends Model
{
    //
	protected $table = 'asteriscos';
	protected $primaryKey = 'idasteriscos';
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

	public function asientos()
	{
		return $this->belongsTo(Asientos::class, 'idasientos');
	}
}
