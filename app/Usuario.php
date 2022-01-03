<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable {
    
    use Notifiable;

    protected $table = 'usuarios_sistema';

    protected $fillable = [
        'nome',
        'email',
        'celular',
        'password',
        'token',
		'status',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password'
    ];

}
