<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Abonouniforme
 * 
 * @property int $idabonouniformes
 * @property Carbon $fechaabono
 * @property int $abono
 * @property int $iduniformes
 * 
 * @property Uniforme $uniforme
 *
 * @package App\Models
 */
class Abonouniforme extends Model
{
	protected $table = 'abonouniformes';
	protected $primaryKey = 'idabonouniformes';
	public $timestamps = false;

	protected $casts = [
		'abono' => 'int',
		'iduniformes' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'fechaabono',
		'abono',
		'iduniformes'
	];

	public function uniforme()
	{
		return $this->belongsTo(Uniforme::class, 'iduniformes');
	}
}
