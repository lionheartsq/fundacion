<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sugerido
 * 
 * @property int $idsugeridos
 * @property Carbon $fecha
 * @property Carbon $hora
 * @property string $sugerencia
 * @property int $idresidentes
 * @property int $idespecialista
 * @property int $idsugiere
 * @property string $estado
 * 
 * @property Residente $residente
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Sugerido extends Model
{
	protected $table = 'sugeridos';
	protected $primaryKey = 'idsugeridos';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idespecialista' => 'int',
		'idsugiere' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'sugerencia',
		'idresidentes',
		'idespecialista',
		'idsugiere',
		'estado'
	];

	public function residente()
	{
		return $this->belongsTo(Residente::class, 'idresidentes');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idespecialista');
	}
}
