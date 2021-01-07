<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 * 
 * @property int $idpermisos
 * @property string $motivo
 * @property Carbon $fechasalida
 * @property Carbon $fechaingreso
 * @property string $observaciones
 * @property int $idresidentes
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permisos';
	protected $primaryKey = 'idpermisos';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechasalida',
		'fechaingreso'
	];

	protected $fillable = [
		'motivo',
		'fechasalida',
		'fechaingreso',
		'observaciones',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
