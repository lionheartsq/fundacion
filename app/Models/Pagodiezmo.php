<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pagodiezmo
 * 
 * @property int $idpagodiezmos
 * @property Carbon $fechaabono
 * @property int $abono
 *
 * @package App\Models
 */
class Pagodiezmo extends Model
{
	protected $table = 'pagodiezmos';
	protected $primaryKey = 'idpagodiezmos';
	public $timestamps = false;

	protected $casts = [
		'abono' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'fechaabono',
		'abono'
	];
}
