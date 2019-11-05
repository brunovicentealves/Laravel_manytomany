<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = "usuario";

    protected $fillable = [
        'id','usuario_nome'
    ];



    public function acesso()
    {
        return $this->belongsToMany(Acesso::class, 'usuario_acesso');
    }
}
