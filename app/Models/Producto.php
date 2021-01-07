<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $idproductos
 * @property string $detalle
 * @property int $valorcompra
 * @property int $valorventa
 * @property int $idproveedores
 * @property string $estado
 * 
 * @property Proveedore $proveedore
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'idproductos';
	public $timestamps = false;

	protected $casts = [
		'valorcompra' => 'int',
		'valorventa' => 'int',
		'idproveedores' => 'int'
	];

	protected $fillable = [
		'detalle',
		'valorcompra',
		'valorventa',
		'idproveedores',
		'estado'
	];

	public function proveedore()
	{
		return $this->belongsTo(Proveedore::class, 'idproveedores');
	}
}
