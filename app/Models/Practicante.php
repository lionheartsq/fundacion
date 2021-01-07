<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Practicante
 * 
 * @property int $idpracticantes
 * @property string|null $documentop
 * @property string|null $expedicionp
 * @property Carbon|null $fechanacimiento
 * @property string|null $nombresp
 * @property string|null $apellidosp
 * @property string|null $telefono
 * @property string|null $email
 * @property string $estado
 * @property string|null $direccion
 * @property string|null $ciudad
 * @property string|null $tipodocumento
 * @property string|null $eps
 * @property string|null $universidad
 * @property string|null $carrera
 * @property string|null $semestre
 * 
 * @property Collection|Historialp[] $historialps
 *
 * @package App\Models
 */
class Practicante extends Model
{
	protected $table = 'practicantes';
	protected $primaryKey = 'idpracticantes';
	public $timestamps = false;

	protected $dates = [
		'fechanacimiento'
	];

	protected $fillable = [
		'documentop',
		'expedicionp',
		'fechanacimiento',
		'nombresp',
		'apellidosp',
		'telefono',
		'email',
		'estado',
		'direccion',
		'ciudad',
		'tipodocumento',
		'eps',
		'universidad',
		'carrera',
		'semestre'
	];

	public function historialps()
	{
		return $this->hasMany(Historialp::class, 'idpracticantes');
	}
}
