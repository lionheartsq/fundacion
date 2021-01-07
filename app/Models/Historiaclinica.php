<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historiaclinica
 * 
 * @property int $idhistoriaclinica
 * @property string $genero
 * @property int $lugarnacimiento
 * @property Carbon|null $fechaingreso
 * @property string|null $remitido
 * @property string|null $motivoconsulta
 * @property string|null $descripcion
 * @property string|null $amedicos
 * @property string|null $afamiliares
 * @property string|null $apersonales
 * @property string|null $condiciones
 * @property string|null $aspectos
 * @property string|null $tipologia
 * @property string $observaciones
 * @property string $personal
 * @property string $social
 * @property string $educativa
 * @property string $afectiva
 * @property string $estrategias
 * @property string $observacionesgen
 * @property string $impresion
 * @property string $plan
 * @property string|null $orientador
 * @property string|null $cedorientador
 * @property int $idresidentes
 * 
 * @property Residente $residente
 * @property Ciudade $ciudade
 *
 * @package App\Models
 */
class Historiaclinica extends Model
{
	protected $table = 'historiaclinica';
	protected $primaryKey = 'idhistoriaclinica';
	public $timestamps = false;

	protected $casts = [
		'lugarnacimiento' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso'
	];

	protected $fillable = [
		'genero',
		'lugarnacimiento',
		'fechaingreso',
		'remitido',
		'motivoconsulta',
		'descripcion',
		'amedicos',
		'afamiliares',
		'apersonales',
		'condiciones',
		'aspectos',
		'tipologia',
		'observaciones',
		'personal',
		'social',
		'educativa',
		'afectiva',
		'estrategias',
		'observacionesgen',
		'impresion',
		'plan',
		'orientador',
		'cedorientador',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}

	public function ciudade()
	{
		return $this->belongsTo(Ciudade::class, 'lugarnacimiento');
	}
}
