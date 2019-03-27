<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    protected $fillable = [
        'user_id',
        'employ_id',
        'folio',
        'chaleco',
        'mochila',
        'gafete',
        'rotafolio',
        'manuales',
        'sombrero',
        'portahojas',
        'utileria',
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
