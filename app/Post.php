<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = [
        'title', 
        'brief', 
        'content', 
        'image',
        'status',
        'category_id',
        'user_id'
    ];
}
