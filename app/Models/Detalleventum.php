<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleventum
 * 
 * @property int $iddetalleventa
 * @property int $cantidad
 * @property float $valor
 * @property int $idventa
 * @property int $idproductos
 *
 * @package App\Models
 */
class Detalleventum extends Model
{
	protected $table = 'detalleventa';
	protected $primaryKey = 'iddetalleventa';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'valor' => 'float',
		'idventa' => 'int',
		'idproductos' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'valor',
		'idventa',
		'idproductos'
	];
}
