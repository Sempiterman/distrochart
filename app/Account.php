<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
       'nameuser',
       // 'slug',
       'nombre',
       'apellidop',
       'apellidom',
       'correo',
       'password',
       'nummoviline',
       'observaciones',
       'status'
    ];

    //Query Scope
    public function scopeNameuser($query, $nameuser)
    {
        if($nameuser)
            return $query->where('nameuser', 'LIKE', "%$nameuser%");
    }
    public function scopeCorreo($query, $correo)
    {
        if($correo)
            return $query->where('correo', 'LIKE', "%$correo%");
    }
    public function scopeNummoviline($query, $nummoviline)
    {
        if($nummoviline)
            return $query->where('nummoviline', 'LIKE', "%$nummoviline%");
    }
}