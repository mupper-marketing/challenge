<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = array('data', 'veterinario_id', 'pet_id', 'observacao', 'created_at', 'updated_at');

    public function pet()
    {
        return $this->belongsTo('App\Pet');
    }

    public function veterinario()
    {
        return $this->belongsTo('App\Veterinario');
    }
}
