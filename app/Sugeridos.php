<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugeridos extends Model
{
    //
	protected $table = 'sugeridos';
	protected $primaryKey = 'idsugeridos';
	public $timestamps = false;

	protected $casts = [
		'idresidentes' => 'int',
		'idespecialista' => 'int',
		'idsugiere' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'sugerencia',
		'idresidentes',
		'idespecialista',
		'idsugiere',
		'estado'
	];

	public function residentes()
	{
		return $this->belongsTo(Residentes::class, 'idresidentes');
	}

	public function users()
	{
		return $this->belongsTo(User::class, 'idespecialista');
	}
}
