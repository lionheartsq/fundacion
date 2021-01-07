<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallepedido
 * 
 * @property int $iddetallepedido
 * @property int $idproductos
 * @property int $cantidad
 * @property float $valor
 * @property int $idpedidos
 *
 * @package App\Models
 */
class Detallepedido extends Model
{
	protected $table = 'detallepedido';
	protected $primaryKey = 'iddetallepedido';
	public $timestamps = false;

	protected $casts = [
		'idproductos' => 'int',
		'cantidad' => 'int',
		'valor' => 'float',
		'idpedidos' => 'int'
	];

	protected $fillable = [
		'idproductos',
		'cantidad',
		'valor',
		'idpedidos'
	];
}
