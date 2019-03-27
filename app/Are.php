<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Are extends Model
{
    protected $fillable = [
        'name', 'slug', 'descripcion'
    ];
    public function charters()
    {
        return $this->hasMany(Charter::class);
    }

    public function employs()
    {
        return $this->hasMany(Employ::class);
    }

    //Query Scope
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeDescripcion($query, $descripcion)
    {
        if($descripcion)
            return $query->where('descripcion', 'LIKE', "%$descripcion%");
    }
}
