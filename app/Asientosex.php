<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asientosex extends Model
{
    //
	protected $table = 'asientosex';
	protected $primaryKey = 'idasientosex';
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

	public function externas()
	{
		return $this->hasMany(Externa::class, 'idasientosex');
	}
}
