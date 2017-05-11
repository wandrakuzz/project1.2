<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawatan extends Model
{
    //
    protected $fillable = [

      'ketua',
      'timbalan_kp',
      'setiausaha',
      'timbalan_su',
      'bendahari',
      'timbalan_bendahari',
      'ajk_program',
      'ajk_publisiti',
      'ajk_cenderamata',
      'ajk_tugaskhas',
      'ajk_teknikal',
      'ajk_perhubungan',

    ];

    public function suggest()
    {
      return $this->belongsTo(Suggest::class, 'jawatan_id');
    }
}
