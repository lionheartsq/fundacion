<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $ID_DEPARTAMENTOS
 * @property string|null $DETALLE_DEPARTAMENTOS
 * @property string|null $ESTADO
 * 
 * @property Collection|Ciudade[] $ciudades
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'ID_DEPARTAMENTOS';
	public $timestamps = false;

	protected $fillable = [
		'DETALLE_DEPARTAMENTOS',
		'ESTADO'
	];

	public function ciudades()
	{
		return $this->hasMany(Ciudade::class, 'ID_DEPARTAMENTOS');
	}
}
