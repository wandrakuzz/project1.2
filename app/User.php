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
        'name', 'email', 'password','kelab_id','matric_no','user_group','alasan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function kelab()
    {
        return $this->belongsTo(Kelab::class, 'kelab_id');
    }

    public function suggest()
    {
      return $this->hasMany(Suggest::class);
    }

    public function tukaran()
    {
      return $this->hasOne(Tukaran::class);
    }

    public function project()
    {
      return $this->hasOne(Project::class);
    }

    public function jawatan()
    {
        return $this->hasMany(Jawatan::class);
    }
}
