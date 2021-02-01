<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipologia extends Model
{
    //
	protected $table = 'tipologia';
	protected $primaryKey = 'idtipologia';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function asientos()
	{
		return $this->hasMany(Asientos::class, 'idtipologia');
	}

	public function asientosahorros()
	{
		return $this->hasMany(Asientosahorro::class, 'idtipologia');
	}

	public function asientosexternos()
	{
		return $this->hasMany(Asientosex::class, 'idtipologia');
	}
}
