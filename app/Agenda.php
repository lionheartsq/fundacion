<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
	protected $table = 'agenda';
	protected $primaryKey = 'idagenda';
	public $timestamps = false;

	protected $casts = [
		'idusuarios' => 'int',
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'idusuarios',
		'estado',
		'idresidentes'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}

	public function users()
	{
		return $this->belongsTo(User::class, 'idusuarios');
	}
}
