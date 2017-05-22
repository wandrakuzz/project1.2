<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawatan extends Model
{
    //
    protected $fillable = [

      'name'

    ];

    public function suggest()
    {
      return $this->belongsTo(Suggest::class, 'jawatan_id');
    }

    public function project()
    {
      return $this->hasOne(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
