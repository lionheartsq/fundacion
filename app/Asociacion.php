<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociacion extends Model
{
    //
	protected $table = 'asociacion';
	protected $primaryKey = 'idasociacion';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idusuarios' => 'int'
	];

	protected $fillable = [
		'idresidentes',
		'idusuarios',
		'parentesco'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}

	public function usuarios()
	{
		return $this->belongsTo(User::class, 'idusuarios');
	}
}
