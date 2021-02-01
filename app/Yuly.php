<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yuly extends Model
{
    //
	protected $table = 'yuly';
	protected $primaryKey = 'idyuly';
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
