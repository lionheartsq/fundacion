<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialp extends Model
{
    //
	protected $table = 'historialp';
	protected $primaryKey = 'idhistorialp';
	public $timestamps = false;

	protected $casts = [
		'idpracticantes' => 'int'
	];

	protected $dates = [
		'fechaingreso',
		'fecharetiro'
	];

	protected $fillable = [
		'fechaingreso',
		'fecharetiro',
		'observaciones',
		'idpracticantes'
	];

	public function practicantes()
	{
		return $this->belongsTo(Practicantes::class, 'idpracticantes');
	}
}
