<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historiaclinicaamp
 * 
 * @property int $idhistoriaclinicaamp
 * @property string|null $motivoconsulta
 * @property string|null $descripcion
 * @property string|null $amedicos
 * @property string|null $afamiliares
 * @property string|null $apersonales
 * @property string|null $condiciones
 * @property string|null $aspectos
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
 * @package App\Models
 */
class Historiaclinicaamp extends Model
{
	protected $table = 'historiaclinicaamp';
	protected $primaryKey = 'idhistoriaclinicaamp';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $fillable = [
		'motivoconsulta',
		'descripcion',
		'amedicos',
		'afamiliares',
		'apersonales',
		'condiciones',
		'aspectos',
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
}
