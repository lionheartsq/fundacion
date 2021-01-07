<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobroalmuerzo
 * 
 * @property int $idcobroalmuerzos
 * @property Carbon $fechaventa
 * @property int $valorinicial
 * @property Carbon $fechaabono
 * @property int $abono
 * @property int $saldo
 * @property string $observaciones
 * @property int $idresidentes
 * 
 * @property Residente $residente
 *
 * @package App\Models
 */
class Cobroalmuerzo extends Model
{
	protected $table = 'cobroalmuerzos';
	protected $primaryKey = 'idcobroalmuerzos';
	public $timestamps = false;

	protected $casts = [
		'valorinicial' => 'int',
		'abono' => 'int',
		'saldo' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaventa',
		'fechaabono'
	];

	protected $fillable = [
		'fechaventa',
		'valorinicial',
		'fechaabono',
		'abono',
		'saldo',
		'observaciones',
		'idresidentes'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}
}
