<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roca extends Model
{
    //
	protected $table = 'roca';
	protected $primaryKey = 'idroca';
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
