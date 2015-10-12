<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
        'url',
        'user_id',
        'published_at',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
