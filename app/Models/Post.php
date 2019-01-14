<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];

    // Relaciona muitos comentários com um unico Post
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
    // Relaciona muitos posts com um unico Autor
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
