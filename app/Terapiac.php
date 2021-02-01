<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapiac extends Model
{
    //
	protected $table = 'terapiac';
	protected $primaryKey = 'idterapiac';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'colider',
		'fallas',
		'observaciones',
		'ayudas',
		'idresidentes'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}
}
