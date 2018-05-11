<?php

use Illuminate\Database\Seeder;
use App\Kelab;

class KelabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'Cyberethic',
          'Numoss',
          'Robotics',
          'Mobile Apps Development (MAD)',
          'Interactive Multimedia',
          'Programming Challenge',
          'Lensa Informatic',
          'Video Innovation',
          'iBusiness Innovative',
          'Intelligent Machines',
          'Imagine Cup',
        ];

        foreach ($data as $item) {
          Kelab::create([
            'name' => $item
          ]);
        }
    }
}
