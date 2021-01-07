<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Uniforme
 * 
 * @property int $iduniformes
 * @property Carbon $fechacobro
 * @property string $nuevo
 * @property string $antiguo
 * @property string $visita
 * @property string $buzo
 * @property int $valorcobro
 * @property string $comentario
 * @property int $idresidentes
 * 
 * @property Collection|Abonouniforme[] $abonouniformes
 *
 * @package App\Models
 */
class Uniforme extends Model
{
	protected $table = 'uniformes';
	protected $primaryKey = 'iduniformes';
	public $timestamps = false;

	protected $casts = [
		'valorcobro' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechacobro'
	];

	protected $fillable = [
		'fechacobro',
		'nuevo',
		'antiguo',
		'visita',
		'buzo',
		'valorcobro',
		'comentario',
		'idresidentes'
	];

	public function abonouniformes()
	{
		return $this->hasMany(Abonouniforme::class, 'iduniformes');
	}
}
