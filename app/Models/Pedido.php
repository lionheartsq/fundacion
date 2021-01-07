<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $idpedidos
 * @property Carbon $fecha
 * @property string $documento
 * @property float $valor
 * @property string $observaciones
 * @property int $idproveedores
 * 
 * @property Proveedore $proveedore
 * @property Collection|Pago[] $pagos
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	protected $primaryKey = 'idpedidos';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'idproveedores' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'documento',
		'valor',
		'observaciones',
		'idproveedores'
	];

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'idproveedores');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'idpedidos');
	}
}
