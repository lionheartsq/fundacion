<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ventum
 * 
 * @property int $idventa
 * @property Carbon $fecha
 * @property int $valor
 * @property int $idresidentes
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Ventum extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'idventa';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'valor',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
