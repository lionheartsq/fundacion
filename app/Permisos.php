<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    //
	protected $table = 'permisos';
	protected $primaryKey = 'idpermisos';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechasalida',
		'fechaingreso'
	];

	protected $fillable = [
		'motivo',
		'fechasalida',
		'fechaingreso',
		'observaciones',
		'idresidentes'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}

}
