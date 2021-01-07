<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actore
 * 
 * @property int $idactores
 * @property string $nombre
 *
 * @package App\Models
 */
class Actore extends Model
{
	protected $table = 'actores';
	protected $primaryKey = 'idactores';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
