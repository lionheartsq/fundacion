<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asientosahorro
 * 
 * @property int $idasientosahorro
 * @property Carbon $fecha
 * @property string $concepto
 * @property string $detalle
 * @property int $idtipologia
 * 
 * @property Tipologium $tipologium
 * @property Collection|Ahorro[] $ahorros
 *
 * @package App\Models
 */
class Asientosahorro extends Model
{
	protected $table = 'asientosahorro';
	protected $primaryKey = 'idasientosahorro';
	public $timestamps = false;

	protected $casts = [
		'idtipologia' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'concepto',
		'detalle',
		'idtipologia'
	];

	public function tipologium()
	{
		return $this->belongsTo(Tipologium::class, 'idtipologia');
	}

	public function ahorros()
	{
		return $this->hasMany(Ahorro::class, 'idasientosahorro');
	}
}
