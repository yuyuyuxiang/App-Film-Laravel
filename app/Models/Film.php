<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'Film';
    protected $primaryKey = 'idFilm';
    public $timestamps = false;

    public function avis()
    {
        return $this->hasMany(Avis::class, 'idFilm');
    }
}
