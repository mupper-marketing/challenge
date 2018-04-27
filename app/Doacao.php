<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = 'doacoes';
    protected $fillable = array('tipo', 'quantidade', 'nomeDoador', 'enderecoDoador', 'telefoneDoador', 'created_at', 'update_ate', 'status');

    public function doacaoEspecifica()
    {
        return $this->hasOne('App\DoacaoEspecifica');
    }
}
