<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'usuarios';
    protected $primaryKey = 'Cod_Usuario';
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Contrasena',
        'remember_token',
    ];

    public function canchas(){
        return $this->hasMany('App\Models\Cancha', 'Cod_Cancha');
    }
   
    public function posiciones(){
        return $this->belongsTo('App\Models\Posicion', 'Cod_Posicion');
    }
    public function provincias(){

        return $this->belongsTo(Provincia::class , 'Cod_Provincia');
    

    }

    public function cantones(){

        return $this->belongsTo(Canton::class , 'Cod_Canton');
    

    }
    public function distritos(){

        return $this->belongsTo(Distrito::class , 'Cod_Distrito');
    

    }

    public function solicitudes(){

        return $this->hasMany('App\Models\Solicitud' , 'Cod_Usuario');
    

    }

}
