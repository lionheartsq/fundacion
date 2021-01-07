<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Familia
 * 
 * @property int $idfamilias
 * @property Carbon $fecha
 * @property string $mensaje
 * @property int $idresidentes
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Familia extends Model
{
	protected $table = 'familias';
	protected $primaryKey = 'idfamilias';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'mensaje',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
