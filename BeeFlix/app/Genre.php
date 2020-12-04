<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function moview(){
        return $this->hasMany(Movie::class);
    }

    protected $table = 'genres';
}
