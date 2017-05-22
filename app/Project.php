<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'suggest_id', 'user_id', 'jawatan_id','kedatangan'
    ];




    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function suggest()
    {
        return $this->belongsTo(Suggest::class, 'suggest_id');
    }

    public function jawatan()
    {
        return $this->belongsTo(Jawatan::class, 'jawatan_id');
    }
}
