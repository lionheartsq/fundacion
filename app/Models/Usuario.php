<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idusuarios
 * @property string $documento
 * @property string|null $expedicion
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $telefono
 * @property string|null $email
 * @property string|null $autorizacion
 * @property int $idroles
 * @property string $estado
 * 
 * @property Role $role
 * @property Collection|Agenda[] $agendas
 * @property Collection|Asociacion[] $asociacions
 * @property Collection|Sugerido[] $sugeridos
 * @property Collection|Terapiae[] $terapiaes
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'idusuarios';
	public $timestamps = false;

	protected $casts = [
		'idroles' => 'int'
	];

	protected $fillable = [
		'documento',
		'expedicion',
		'nombres',
		'apellidos',
		'telefono',
		'email',
		'autorizacion',
		'idroles',
		'estado'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'idroles');
	}

	public function agendas()
	{
		return $this->hasMany(Agenda::class, 'idusuarios');
	}

	public function asociacions()
	{
		return $this->hasMany(Asociacion::class, 'idusuarios');
	}

	public function sugeridos()
	{
		return $this->hasMany(Sugerido::class, 'idespecialista');
	}

	public function terapiaes()
	{
		return $this->hasMany(Terapiae::class, 'idusuarios');
	}
}
