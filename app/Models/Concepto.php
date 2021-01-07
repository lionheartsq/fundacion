<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concepto
 * 
 * @property int $idconceptos
 * @property string $nombre
 *
 * @package App\Models
 */
class Concepto extends Model
{
	protected $table = 'conceptos';
	protected $primaryKey = 'idconceptos';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
