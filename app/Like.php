<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function posts()//いいね機能
    {
        return $this->belongsToMany('App\Post');
    }
    
}
