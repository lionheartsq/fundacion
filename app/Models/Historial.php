<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historial
 * 
 * @property int $idhistorial
 * @property Carbon|null $fechaingreso
 * @property string|null $motivoi
 * @property int|null $tiempoadiccion
 * @property string|null $medidatiempo
 * @property string|null $drogasusadas
 * @property string|null $problemas
 * @property string|null $carcel
 * @property string|null $fundaciones
 * @property string|null $motivos
 * @property string|null $referido
 * @property string|null $orientador
 * @property string|null $cedorientador
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Historial extends Model
{
	protected $table = 'historial';
	protected $primaryKey = 'idhistorial';
	public $timestamps = false;

	protected $casts = [
		'tiempoadiccion' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso'
	];

	protected $fillable = [
		'fechaingreso',
		'motivoi',
		'tiempoadiccion',
		'medidatiempo',
		'drogasusadas',
		'problemas',
		'carcel',
		'fundaciones',
		'motivos',
		'referido',
		'orientador',
		'cedorientador',
		'idresidentes'
	];
}
