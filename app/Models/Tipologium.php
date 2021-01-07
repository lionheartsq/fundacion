<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipologium
 * 
 * @property int $idtipologia
 * @property string $nombre
 * 
 * @property Collection|Asiento[] $asientos
 * @property Collection|Asientosahorro[] $asientosahorros
 * @property Collection|Asientosex[] $asientosexes
 *
 * @package App\Models
 */
class Tipologium extends Model
{
	protected $table = 'tipologia';
	protected $primaryKey = 'idtipologia';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function asientos()
	{
		return $this->hasMany(Asiento::class, 'idtipologia');
	}

	public function asientosahorros()
	{
		return $this->hasMany(Asientosahorro::class, 'idtipologia');
	}

	public function asientosexes()
	{
		return $this->hasMany(Asientosex::class, 'idtipologia');
	}
}
