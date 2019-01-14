<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'post_id',
        'user_id',
        'title',
        'body'
    ];

    //relacionamento de muitos comentários para um Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    //relacionamento de muitos post para um Usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}