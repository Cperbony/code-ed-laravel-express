<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'name',
        'email',
        'comment'
    ];

    public function comments()
    {
        return $this->belongsTo('App\Post');
    }
}
