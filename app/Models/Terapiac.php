<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Terapiac
 * 
 * @property int $idterapiac
 * @property Carbon $fecha
 * @property string $colider
 * @property string $fallas
 * @property string $observaciones
 * @property string $ayudas
 * @property int $idresidentes
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Terapiac extends Model
{
	protected $table = 'terapiac';
	protected $primaryKey = 'idterapiac';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'colider',
		'fallas',
		'observaciones',
		'ayudas',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
