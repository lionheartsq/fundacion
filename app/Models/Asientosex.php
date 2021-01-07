<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asientosex
 * 
 * @property int $idasientosex
 * @property Carbon $fecha
 * @property string $concepto
 * @property string $detalle
 * @property int $idtipologia
 * 
 * @property Tipologium $tipologium
 * @property Collection|Externa[] $externas
 *
 * @package App\Models
 */
class Asientosex extends Model
{
	protected $table = 'asientosex';
	protected $primaryKey = 'idasientosex';
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

	public function externas()
	{
		return $this->hasMany(Externa::class, 'idasientosex');
	}
}
