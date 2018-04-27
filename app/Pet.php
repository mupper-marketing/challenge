<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'idade', 'especie', 'raca', 'observacao'];

    public function imgPet()
    {
        return $this->hasOne('App\ImgPets');
    }
}
