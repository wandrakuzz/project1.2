<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelab extends Model
{
    //
    protected $fillable = [
      'name'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'kelab _id');
    }

    public function tukaran()
    {
        return $this->hasOne(Tukaran::class, 'kelab _id');
    }
}
