<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public function posts()   
    {
        return $this->hasMany('App\Post');
    }
    
    public function getByPrefecture(int $limit_count = 5)
    {
        return $this->posts()->with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
