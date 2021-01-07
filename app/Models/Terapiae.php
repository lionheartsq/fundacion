<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Terapiae
 * 
 * @property int $idterapiae
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
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Terapiae extends Model
{
	protected $table = 'terapiae';
	protected $primaryKey = 'idterapiae';
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

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idusuarios');
	}
}
