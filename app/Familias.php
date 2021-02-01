<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familias extends Model
{
    //
	protected $table = 'familias';
	protected $primaryKey = 'idfamilias';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'fecha',
		'mensaje',
		'idresidentes'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}
}
