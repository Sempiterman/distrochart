<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $fillable = [
        'user_id',
        'are_id',
        'municipality_id',
        'position_id',
        'zore_id',
        'numempleado',
        'name',
        'apellidop',
        'apellidom',
        'direccion',
        'telefono',
        'correo',
        'status'
    ];

    public function are()
    {
        return $this->belongsTo(Are::class);
    }

    public function municypality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function zore()
    {
        return $this->belongsTo(Zore::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Query Scope
    public function scopeCorreo($query, $correo)
    {
        if($correo)
            return $query->where('correo', 'LIKE', "%$correo%");
    }
    public function scopeNumempleado($query, $numempleado)
    {
        if($numempleado)
            return $query->where('numempleado', 'LIKE', "%$numempleado%");
    }
    public function scopeTelefono($query, $telefono)
    {
        if($telefono)
            return $query->where('telefono', 'LIKE', "%$telefono%");
    }
}