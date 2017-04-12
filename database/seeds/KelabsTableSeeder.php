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
          'Numoss'
        ];

        foreach ($data as $item) {
          Kelab::create([
            'name' => $item
          ]);
        }
    }
}
