<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    //Query Scope
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeExcerpt($query, $excerpt)
    {
        if($excerpt)
            return $query->where('excerpt', 'LIKE', "%$excerpt%");
    }
    public function scopeBody($query, $body)
    {
        if($body)
            return $query->where('body', 'LIKE', "%$body%");
    }
}
