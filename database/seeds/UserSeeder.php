<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $data = [
        [
          'name'        => 'Dr Suhaila',
          'matric_no'   => 'A148649',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'penasihat',
        ],
        [
          'name'        => 'Azwan',
          'matric_no'   => 'A148650',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Atifah',
          'matric_no'   => 'A148651',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Norfayanis',
          'matric_no'   => 'A148652',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Laila',
          'matric_no'   => 'A148653',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Nik',
          'matric_no'   => 'A148654',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Zatty',
          'matric_no'   => 'A148655',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'Noorazlin',
          'matric_no'   => 'A148656',
          'kelab_id'    => '1',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ]
      ];

      foreach ($data as $datum) {
        $user = User::create($datum);

        // $user->profile()->create([
        //   'user_id' => $user->id,
        //
        //
        // ]);
      }


    }
}
