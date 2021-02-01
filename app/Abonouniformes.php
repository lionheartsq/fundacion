<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonouniformes extends Model
{
    //
	protected $table = 'abonouniformes';
	protected $primaryKey = 'idabonouniformes';
	public $timestamps = false;

	protected $casts = [
		'abono' => 'int',
		'iduniformes' => 'int'
	];

	protected $dates = [
		'fechaabono'
	];

	protected $fillable = [
		'fechaabono',
		'abono',
		'iduniformes'
	];

	public function uniformes()
	{
		return $this->belongsTo(Uniformes::class, 'iduniformes');
	}
}
