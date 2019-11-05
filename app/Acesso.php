<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{

    protected $table = "acesso";

    protected $fillable = [
        'id','acesso_nome'
    ];



    public function usuario()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_acesso');
    }
}
