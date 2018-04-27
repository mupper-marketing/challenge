<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'telefone', 'crv', 'endereco', 'status');
}
