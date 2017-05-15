<?php

use Illuminate\Database\Seeder;
use App\Jawatan;

class JawatanTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'Ketua Program',
            'Timbalan Ketua Program',
            'Bendahari',
            'Timbalan Bendahari',
            'Setiausaha',
            'Timbalan Setiausaha',
            'AJK Program',
            'AJK Publisiti',
            'AJK Perhubungan',
            'AJK Makanan',
            'AJK Protokol',
            'AJK Pengangkutan',
            'AJK Keselamatan',
            'AJK Biasa'
            ];
        foreach ($data as $datum) {
            Jawatan::create([
                'name' => $datum
            ]);
    }
}
}
