<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asientosahorro extends Model
{
    //
	protected $table = 'asientosahorro';
	protected $primaryKey = 'idasientosahorro';
	public $timestamps = false;

	protected $casts = [
		'idtipologia' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'concepto',
		'detalle',
		'idtipologia'
	];

	public function tipologia()
	{
		return $this->belongsTo(Tipologia::class, 'idtipologia');
	}

	public function ahorros()
	{
		return $this->hasMany(Ahorro::class, 'idasientosahorro');
	}
}
