<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Terapialider
 * 
 * @property int $idterapialider
 * @property Carbon $fecha
 * @property Carbon $hora
 * @property string $evaluacion
 * @property string $trabajo
 * @property string $tarea
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Terapialider extends Model
{
	protected $table = 'terapialider';
	protected $primaryKey = 'idterapialider';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'evaluacion',
		'trabajo',
		'tarea',
		'idresidentes'
	];
}
