<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoacaoEspecifica extends Model
{
    protected $table = 'doacoes_especifica';
    protected $fillable = array('pet_id', 'doacao_id');
    public $timestamps = false;
}
