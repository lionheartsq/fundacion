<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonopensiones extends Model
{
    //
	protected $table = 'abonopensiones';
	protected $primaryKey = 'idabonopensiones';
	public $timestamps = false;

	protected $casts = [
		'valorinicial' => 'int',
		'abono' => 'int',
		'idcobrospension' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'valorinicial',
		'fechaabono',
		'abono',
		'comentario',
		'idcobrospension'
	];
}
