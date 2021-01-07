<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pagoproveedore
 * 
 * @property int $idpagoproveedores
 * @property Carbon $fecha
 * @property int $valorentrada
 * @property int $valorsalida
 * @property string $observaciones
 * @property int $idproveedores
 * 
 * @property Proveedore $proveedore
 *
 * @package App\Models
 */
class Pagoproveedore extends Model
{
	protected $table = 'pagoproveedores';
	protected $primaryKey = 'idpagoproveedores';
	public $timestamps = false;

	protected $casts = [
		'valorentrada' => 'int',
		'valorsalida' => 'int',
		'idproveedores' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'valorentrada',
		'valorsalida',
		'observaciones',
		'idproveedores'
	];

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'idproveedores');
	}
}
