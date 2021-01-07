<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Externa
 * 
 * @property int $idexterna
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 * @property int $idasientosex
 * 
 * @property Asientosex $asientosex
 *
 * @package App\Models
 */
class Externa extends Model
{
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
