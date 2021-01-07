<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Validacion
 * 
 * @property int $idvalidacion
 * @property string|null $password
 * @property int $idusuarios
 *
 * @package App\Models
 */
class Validacion extends Model
{
	protected $table = 'validacion';
	protected $primaryKey = 'idvalidacion';
	public $timestamps = false;

	protected $casts = [
		'idusuarios' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password',
		'idusuarios'
	];
}
