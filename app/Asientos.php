<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asientos extends Model
{
    //
	protected $table = 'asientos';
	protected $primaryKey = 'idasientos';
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

	public function asteriscos()
	{
		return $this->hasMany(Asteriscos::class, 'idasientos');
	}

	public function jorec()
	{
		return $this->hasMany(Jorec::class, 'idasientos');
	}

	public function roca()
	{
		return $this->hasMany(Roca::class, 'idasientos');
	}

	public function yuli()
	{
		return $this->hasMany(Yuly::class, 'idasientos');
	}
}
