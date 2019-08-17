<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = ['name'];

    public function days()
    {
        return $this->belongsToMany('App\Jour', 'jour_restaurant')->withPivot('horaires');
    }
}