<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahorro
 * 
 * @property int $idahorro
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 * @property int $idasientosahorro
 * @property int $diezmo
 * 
 * @property Asientosahorro $asientosahorro
 *
 * @package App\Models
 */
class Ahorro extends Model
{
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
