<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 * 
 * @property int $idproveedores
 * @property string $nombre
 * @property int $estado
 * 
 * @property Collection|Pagoproveedore[] $pagoproveedores
 * @property Collection|Pedido[] $pedidos
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Proveedore extends Model
{
	protected $table = 'proveedores';
	protected $primaryKey = 'idproveedores';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'estado'
	];

	public function pagoproveedores()
	{
		return $this->hasMany(Pagoproveedore::class, 'idproveedores');
	}

	public function pedidos()
	{
		return $this->hasMany(Pedido::class, 'idproveedores');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'idproveedores');
	}
}
