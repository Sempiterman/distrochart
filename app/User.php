<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function employs()
    {
        return $this->hasMany(Employ::class);
    }

    public function charters()
    {
        return $this->hasMany(Charter::class);
    }

    public function movilforms()
    {
        return $this->hasMany(MovilForm::class);
    }

    public function kitforms()
    {
        return $this->hasMany(KitForm::class);
    }
}
