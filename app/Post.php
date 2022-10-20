<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //保存定義
    protected $fillable = [
        'title',
        'comment',
        'address',
        'prefecture_id',
        'image',
        'user_id'
    ];
    
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture');
    }
    
    public function users()//いいね機能
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    
}
