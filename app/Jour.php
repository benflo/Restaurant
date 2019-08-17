<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant', 'jour_restaurant')->withPivot('id', 'horaires');
    }
}
