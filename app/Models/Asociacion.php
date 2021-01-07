<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asociacion
 * 
 * @property int $idasociacion
 * @property int $idresidentes
 * @property int $idusuarios
 * @property string|null $parentesco
 * 
 * @property Residente $residente
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Asociacion extends Model
{
	protected $table = 'asociacion';
	protected $primaryKey = 'idasociacion';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idusuarios' => 'int'
	];

	protected $fillable = [
		'idresidentes',
		'idusuarios',
		'parentesco'
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
