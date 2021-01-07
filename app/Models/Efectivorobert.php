<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Efectivorobert
 * 
 * @property int $idefectivorobert
 * @property Carbon $fecha
 * @property string $concepto
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $acumulado
 *
 * @package App\Models
 */
class Efectivorobert extends Model
{
	protected $table = 'efectivorobert';
	protected $primaryKey = 'idefectivorobert';
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