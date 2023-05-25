<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $table = 'Avis';
    protected $primaryKey = 'idAvis';
    public $timestamps = false;

    public function film()
    {
        return $this->belongsTo(Film::class, 'idFilm');
    }
}

