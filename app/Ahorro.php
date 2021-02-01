<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    //
	protected $table = 'ahorro';
	protected $primaryKey = 'idahorro';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'acumulado' => 'int',
		'idasientosahorro' => 'int',
		'diezmo' => 'int'
	];

	protected $fillable = [
		'valorentrada',
		'valorsalida',
		'acumulado',
		'idasientosahorro',
		'diezmo'
	];

	public function asientosahorro()
	{
		return $this->belongsTo(Asientosahorro::class, 'idasientosahorro');
	}
}
