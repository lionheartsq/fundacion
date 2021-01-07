<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asterisco
 * 
 * @property int $idasteriscos
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 * @property int $idasientos
 * 
 * @property Asiento $asiento
 *
 * @package App\Models
 */
class Asterisco extends Model
{
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

	public function asiento()
	{
		return $this->belongsTo(Asiento::class, 'idasientos');
	}
}
