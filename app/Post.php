<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }

    //Palavras get e Attbributes são obrigatórias
    //Método acessor do Laravel
    public function getTagListAttribute() {
        //Cria uma lista de nomes de tags
        $tags = $this->tags()->lists('name')->all();
        return implode(', ', $tags);
    }
}
