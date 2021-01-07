<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Minuta
 * 
 * @property int $idminutas
 * @property Carbon $fecha
 * @property string $visitante
 * @property string $cedula
 * @property string $asunto
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Minuta extends Model
{
	protected $table = 'minutas';
	protected $primaryKey = 'idminutas';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'visitante',
		'cedula',
		'asunto',
		'idresidentes'
	];
}
