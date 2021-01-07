<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Abonopensione
 * 
 * @property int $idabonopensiones
 * @property int $valorinicial
 * @property Carbon $fechaabono
 * @property int $abono
 * @property string $comentario
 * @property int $idcobrospension
 *
 * @package App\Models
 */
class Abonopensione extends Model
{
	protected $table = 'abonopensiones';
	protected $primaryKey = 'idabonopensiones';
	public $timestamps = false;

	protected $casts = [
		'valorinicial' => 'int',
		'abono' => 'int',
		'idcobrospension' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'valorinicial',
		'fechaabono',
		'abono',
		'comentario',
		'idcobrospension'
	];
}
