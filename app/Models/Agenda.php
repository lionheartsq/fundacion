<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * 
 * @property int $idagenda
 * @property Carbon $fecha
 * @property Carbon $hora
 * @property int $idusuarios
 * @property string $estado
 * @property int $idresidentes
 * 
 * @property Residente $residente
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Agenda extends Model
{
	protected $table = 'agenda';
	protected $primaryKey = 'idagenda';
	public $timestamps = false;

	protected $casts = [
		'idusuarios' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'idusuarios',
		'estado',
		'idresidentes'
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
