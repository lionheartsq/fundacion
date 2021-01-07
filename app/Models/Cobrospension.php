<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobrospension
 * 
 * @property int $idcobrospension
 * @property int $diacobro
 * @property int $valorcobro
 * @property int $idresidentes
 *
 * @package App\Models
 */
class Cobrospension extends Model
{
	protected $table = 'cobrospension';
	protected $primaryKey = 'idcobrospension';
	public $timestamps = false;

	protected $casts = [
		'diacobro' => 'int',
		'valorcobro' => 'int',
		'idresidentes' => 'int'
	];

	protected $fillable = [
		'diacobro',
		'valorcobro',
		'idresidentes'
	];
}
