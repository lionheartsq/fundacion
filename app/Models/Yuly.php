<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Yuly
 * 
 * @property int $idyuly
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 * @property int $idasientos
 * 
 * @property Asiento $asiento
 *
 * @package App\Models
 */
class Yuly extends Model
{
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

	public function asiento()
	{
		return $this->belongsTo(Asiento::class, 'idasientos');
	}
}
