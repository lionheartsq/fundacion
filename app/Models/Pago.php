<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int $idpagos
 * @property Carbon $fechaabono
 * @property float $valorpago
 * @property float $abono
 * @property string $obs
 * @property int $idpedidos
 * 
 * @property Pedido $pedido
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pagos';
	protected $primaryKey = 'idpagos';
	public $timestamps = false;

	protected $casts = [
		'valorpago' => 'float',
		'abono' => 'float',
		'idpedidos' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'fechaabono',
		'valorpago',
		'abono',
		'obs',
		'idpedidos'
	];

	public function pedido()
	{
		return $this->belongsTo(Pedido::class, 'idpedidos');
	}
}
