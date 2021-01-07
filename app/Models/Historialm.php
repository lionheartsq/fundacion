<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historialm
 * 
 * @property int $idhistorialm
 * @property string|null $enfermedades
 * @property Carbon|null $fechaexamen
 * @property string|null $estadosalud
 * @property string|null $vacunas
 * @property string|null $diagnosis
 * @property string|null $medicamentos
 * @property string|null $alergias
 * @property string|null $hospitalizado
 * @property string|null $descripcion
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Historialm extends Model
{
	protected $table = 'historialm';
	protected $primaryKey = 'idhistorialm';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaexamen'
	];

	protected $fillable = [
		'enfermedades',
		'fechaexamen',
		'estadosalud',
		'vacunas',
		'diagnosis',
		'medicamentos',
		'alergias',
		'hospitalizado',
		'descripcion',
		'idresidentes'
	];
}
