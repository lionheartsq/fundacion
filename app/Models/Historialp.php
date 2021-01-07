<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historialp
 * 
 * @property int $idhistorialp
 * @property Carbon $fechaingreso
 * @property Carbon $fecharetiro
 * @property string $observaciones
 * @property int $idpracticantes
 * 
 * @property Practicante $practicante
 *
 * @package App\Models
 */
class Historialp extends Model
{
	protected $table = 'historialp';
	protected $primaryKey = 'idhistorialp';
	public $timestamps = false;

	protected $casts = [
		'idpracticantes' => 'int'
	];

	protected $dates = [
		'fechaingreso',
		'fecharetiro'
	];

	protected $fillable = [
		'fechaingreso',
		'fecharetiro',
		'observaciones',
		'idpracticantes'
	];

	public function practicante()
	{
		return $this->belongsTo(Practicante::class, 'idpracticantes');
	}
}
