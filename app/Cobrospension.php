<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobrospension extends Model
{
    //
	protected $table = 'cobrospension';
	protected $primaryKey = 'idcobrospension';
	public $timestamps = false;

	protected $casts = [
		'diacobro' => 'int',
		'valorcobro' => 'int',
		'idresidentes' => 'int'
	];

	protected $fillable = [
		'diacobro',
		'valorcobro',
		'idresidentes'
	];
}
