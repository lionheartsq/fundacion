<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historiali extends Model
{
    //
	protected $table = 'historiali';
	protected $primaryKey = 'idhistoriali';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fechaingreso',
		'fecharetiro'
	];

	protected $fillable = [
		'fechaingreso',
		'fecharetiro',
		'motivo',
		'idresidentes'
	];
}
