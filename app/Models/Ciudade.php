<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 * 
 * @property int $ID_CIUDADES
 * @property string|null $DETALLE_CIUDADES
 * @property string|null $ESTADO
 * @property int $ID_DEPARTAMENTOS
 * 
 * @property Departamento $departamento
 * @property Collection|Historiaclinica[] $historiaclinicas
 *
 * @package App\Models
 */
class Ciudade extends Model
{
	protected $table = 'ciudades';
	protected $primaryKey = 'ID_CIUDADES';
	public $timestamps = false;

	protected $casts = [
		'ID_DEPARTAMENTOS' => 'int'
	];

	protected $fillable = [
		'DETALLE_CIUDADES',
		'ESTADO',
		'ID_DEPARTAMENTOS'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'ID_DEPARTAMENTOS');
	}

	public function historiaclinicas()
	{
		return $this->hasMany(Historiaclinica::class, 'lugarnacimiento');
	}
}
