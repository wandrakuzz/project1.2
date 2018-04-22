<?php

use Illuminate\Database\Seeder;
use App\Kursus;

class KursusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name'  => 'Computer Science',
                'abbrv' => 'CS'
            ],
            [
                'name'  => 'Software Engineering Information System',
                'abbrv' => 'SEIS'
            ],
            [
                'name'  => 'Software Engineering Multimedia',
                'abbrv' => 'SEMM'
            ],
            [
                'name'  => 'Information Technology',
                'abbrv' => 'TM'
            ],
        ];

        foreach ($data as $datum) {
            Kursus::create($datum);
        }
    }
}
