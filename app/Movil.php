<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    protected $fillable = [
        'user_id',
        'employ_id',
        'folio',
        'audifonos',
        'cargador',
        'cable',
        'estado',
        'bateria',
        'chip',
        'display',
        'detalles',
        'status'
    ];

    public function employ()
    {
        return $this->belongsTo(Employ::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Query Scope
    public function scopeFolio($query, $folio)
    {
        if($folio)
            return $query->where('folio', 'LIKE', "%$folio%");
    }
}
