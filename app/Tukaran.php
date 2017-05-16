<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tukaran extends Model
{
    protected $fillable = [
      'kelab_baru','alasan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelab()
    {
        return $this->belongsTo(Kelab::class);
    }
}
