<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Asiento
 * 
 * @property int $idasientos
 * @property Carbon $fecha
 * @property string $concepto
 * @property string $detalle
 * @property int $idtipologia
 * 
 * @property Tipologium $tipologium
 * @property Collection|Asterisco[] $asteriscos
 * @property Collection|Jorec[] $jorecs
 * @property Collection|Roca[] $rocas
 * @property Collection|Yuly[] $yulies
 *
 * @package App\Models
 */
class Asiento extends Model
{
	protected $table = 'asientos';
	protected $primaryKey = 'idasientos';
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

	public function asteriscos()
	{
		return $this->hasMany(Asterisco::class, 'idasientos');
	}

	public function jorecs()
	{
		return $this->hasMany(Jorec::class, 'idasientos');
	}

	public function rocas()
	{
		return $this->hasMany(Roca::class, 'idasientos');
	}

	public function yulies()
	{
		return $this->hasMany(Yuly::class, 'idasientos');
	}
}
