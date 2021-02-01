<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
	protected $primaryKey = 'idusuarios';
	public $timestamps = false;

	protected $fillable = [
		'documento',
		'expedicion',
		'nombres',
		'apellidos',
		'telefono',
		'email',
		'autorizacion',
		'idroles',
        'estado',
        'password'
	];

    public function roles() {
        return $this->hasMany(Roles::class, 'idroles');
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
