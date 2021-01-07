<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Colpatrium
 * 
 * @property int $idcolpatria
 * @property Carbon $fecha
 * @property string $concepto
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 *
 * @package App\Models
 */
class Colpatrium extends Model
{
	protected $table = 'colpatria';
	protected $primaryKey = 'idcolpatria';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'acumulado' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'concepto',
		'valorentrada',
		'valorsalida',
		'acumulado'
	];
}
