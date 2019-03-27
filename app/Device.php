<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'imei',
        // 'slug',
        'marca',
        'numtelchip',
        'compania',
        'observaciones',
        'status'
    ];
    //Query Scope
    public function scopeImei($query, $imei)
    {
        if($imei)
            return $query->where('imei', 'LIKE', "%$imei%");
    }
    public function scopeNumtelchip($query, $numtelchip)
    {
        if($numtelchip)
            return $query->where('numtelchip', 'LIKE', "%$numtelchip%");
    }
}