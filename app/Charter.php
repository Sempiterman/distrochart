<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charter extends Model
{
    protected $fillable = [
        'user_id',
        'are_id',
        'zore_id',
        'folio',
        'slug',
        'detalles',
        'img',
        'status'
    ];

    public function ares()
    {
        return $this->belongsTo(Are::class);
    }

    public function zores()
    {
        return $this->belongsTo(Zore::class);
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
