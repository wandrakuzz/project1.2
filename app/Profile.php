<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
      'user_id','gender', 'kursus','no_tel','picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  }
