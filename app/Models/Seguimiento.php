<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 * 
 * @property int $idseguimientos
 * @property Carbon $fecha
 * @property Carbon $hora
 * @property string $resumen
 * @property string $evaluacion
 * @property string $tecnicas
 * @property string $tarea
 * @property int $idresidentes
 * @property int $idusuarios
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Seguimiento extends Model
{
	protected $table = 'seguimientos';
	protected $primaryKey = 'idseguimientos';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idusuarios' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'resumen',
		'evaluacion',
		'tecnicas',
		'tarea',
		'idresidentes',
		'idusuarios'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
