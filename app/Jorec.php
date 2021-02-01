<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jorec extends Model
{
    //
	protected $table = 'jorec';
	protected $primaryKey = 'idjorec';
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
