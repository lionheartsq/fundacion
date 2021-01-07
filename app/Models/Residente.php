<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Residente
 * 
 * @property int $idresidentes
 * @property string $documentor
 * @property string|null $expedicionr
 * @property Carbon|null $fechanacimiento
 * @property string|null $nombresr
 * @property string|null $apellidosr
 * @property string|null $telefono
 * @property string|null $celular
 * @property string|null $profesion
 * @property string|null $email
 * @property string $estado
 * @property string|null $direccionf
 * @property string|null $ciudad
 * @property string|null $estudios
 * @property string|null $estadocivil
 * @property string|null $conyuge
 * @property string|null $tipodocumento
 * @property string|null $eps
 * @property string|null $padre
 * @property string|null $madre
 * @property string|null $nomfund
 * @property int $codigo
 * @property Carbon $fechacodigo
 * 
 * @property Collection|Agenda[] $agendas
 * @property Collection|Asociacion[] $asociacions
 * @property Collection|Cobroalmuerzo[] $cobroalmuerzos
 * @property Collection|Familia[] $familias
 * @property Collection|Historiaclinica[] $historiaclinicas
 * @property Collection|Permiso[] $permisos
 * @property Collection|Seguimiento[] $seguimientos
 * @property Collection|Sugerido[] $sugeridos
 * @property Collection|Terapiac[] $terapiacs
 * @property Collection|Terapiae[] $terapiaes
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class Residente extends Model
{
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

	public function asociacions()
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
