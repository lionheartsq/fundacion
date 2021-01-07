<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tienda
 * 
 * @property int $idtienda
 * @property Carbon $fecha
 * @property int $valorentrada
 * @property int $valorsalida
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Tienda extends Model
{
	protected $table = 'tienda';
	protected $primaryKey = 'idtienda';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'valorentrada',
		'valorsalida',
		'idresidentes'
	];
}
