<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uniformes extends Model
{
    //
	protected $table = 'uniformes';
	protected $primaryKey = 'iduniformes';
	public $timestamps = false;

	protected $casts = [
		'valorcobro' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechacobro'
	];

	protected $fillable = [
		'fechacobro',
		'nuevo',
		'antiguo',
		'visita',
		'buzo',
		'valorcobro',
		'comentario',
		'idresidentes'
	];

	public function abonouniformes()
	{
		return $this->hasMany(Abonouniforme::class, 'iduniformes');
	}
}
