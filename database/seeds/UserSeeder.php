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
              'name'        => 'Admin',
              'matric_no'   => 'A007',
              'kelab_id'    => '1',
              'email'       => 'admin@gmail.com',
              'password'    => bcrypt('admin123'),
              'user_group'  => 'admin',
        ],
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
        ],
        [
          'name'        => 'Dayana Intan',
          'matric_no'   => 'A148657',
          'kelab_id'    => '2',
          'email'       => 'A148647@siswa.ukm.edu.my',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
            'name'        => 'Ridhwan Rani',
            'matric_no'   => 'A148658',
            'kelab_id'    => '2',
            'email'       => 'A148647@siswa.ukm.edu.my',
            'password'    => bcrypt('wan123'),
            'user_group'  => 'pelajar',
         ],
         [
            'name'        => 'Amira Rashidi',
            'matric_no'   => 'A148659',
            'kelab_id'    => '2',
            'email'       => 'A148647@siswa.ukm.edu.my',
            'password'    => bcrypt('wan123'),
            'user_group'  => 'pelajar',
        ],

        [
            'name'        => 'aliff',
            'matric_no'   => 'A144444',
            'kelab_id'    => '2',
            'email'       => 'A144444@siswa.ukm.edu.my',
            'password'    => bcrypt('wan123'),
            'user_group'  => 'pelajar',
        ],


        [
           'name'        => 'Syafiq Yazan',
           'matric_no'   => 'A148660',
           'kelab_id'    => '2',
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
