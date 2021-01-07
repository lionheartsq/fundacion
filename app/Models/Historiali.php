<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historiali
 * 
 * @property int $idhistoriali
 * @property Carbon $fechaingreso
 * @property Carbon $fecharetiro
 * @property string $motivo
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Historiali extends Model
{
	protected $table = 'historiali';
	protected $primaryKey = 'idhistoriali';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso',
		'fecharetiro'
	];

	protected $fillable = [
		'fechaingreso',
		'fecharetiro',
		'motivo',
		'idresidentes'
	];
}
