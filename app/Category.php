<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
        'name', 'slug', 'body'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //Query Scope
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
}
