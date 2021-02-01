<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residentes extends Model
{
    //
    protected $table = 'residentes';
	protected $primaryKey = 'idresidentes';
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int'
	];

	protected $dates = [
		'fechanacimiento',
		'fechacodigo'
	];

	protected $fillable = [
		'documentor',
		'expedicionr',
		'fechanacimiento',
		'nombresr',
		'apellidosr',
		'telefono',
		'celular',
		'profesion',
		'email',
		'estado',
		'direccionf',
		'ciudad',
		'estudios',
		'estadocivil',
		'conyuge',
		'tipodocumento',
        'eps',
        'tiposangre',
		'padre',
		'madre',
		'nomfund',
		'codigo',
		'fechacodigo'
	];

	public function agendas()
	{
		return $this->hasMany(Agenda::class, 'idresidentes');
	}

	public function asociaciones()
	{
		return $this->hasMany(Asociacion::class, 'idresidentes');
	}

	public function cobroalmuerzos()
	{
		return $this->hasMany(Cobroalmuerzo::class, 'idresidentes');
	}

	public function familias()
	{
		return $this->hasMany(Familia::class, 'idresidentes');
	}

	public function historiaclinicas()
	{
		return $this->hasMany(Historiaclinica::class, 'idresidentes');
	}

	public function permisos()
	{
		return $this->hasMany(Permiso::class, 'idresidentes');
	}

	public function seguimientos()
	{
		return $this->hasMany(Seguimiento::class, 'idresidentes');
	}

	public function sugeridos()
	{
		return $this->hasMany(Sugerido::class, 'idresidentes');
	}

	public function terapiacs()
	{
		return $this->hasMany(Terapiac::class, 'idresidentes');
	}

	public function terapiaes()
	{
		return $this->hasMany(Terapiae::class, 'idresidentes');
	}

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'idresidentes');
	}
}
