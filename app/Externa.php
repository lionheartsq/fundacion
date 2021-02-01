<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Externa extends Model
{
    //
	protected $table = 'externa';
	protected $primaryKey = 'idexterna';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'acumulado' => 'int',
		'idasientosex' => 'int'
	];

	protected $fillable = [
		'valorentrada',
		'valorsalida',
		'acumulado',
		'idasientosex'
	];

	public function asientosex()
	{
		return $this->belongsTo(Asientosex::class, 'idasientosex');
	}
}
