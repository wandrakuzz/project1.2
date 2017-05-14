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
          'name'        => 'kamal',
          'matric_no'   => 'A148649',
          'kelab_id'    => '1',
          'email'       => 'kamal@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'karim',
          'matric_no'   => 'A148650',
          'kelab_id'    => '1',
          'email'       => 'karim@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'chot',
          'matric_no'   => 'A148651',
          'kelab_id'    => '1',
          'email'       => 'chot@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'khai',
          'matric_no'   => 'A148652',
          'kelab_id'    => '1',
          'email'       => 'khai@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'mukmin',
          'matric_no'   => 'A148653',
          'kelab_id'    => '1',
          'email'       => 'mukmin@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'padei',
          'matric_no'   => 'A148654',
          'kelab_id'    => '1',
          'email'       => 'padei@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'amin',
          'matric_no'   => 'A148655',
          'kelab_id'    => '1',
          'email'       => 'amin@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ],
        [
          'name'        => 'jun',
          'matric_no'   => 'A148656',
          'kelab_id'    => '1',
          'email'       => 'jun@gmail.com',
          'password'    => bcrypt('wan123'),
          'user_group'  => 'pelajar',
        ]
      ];

      foreach ($data as $datum) {
        $user = User::create($datum);

        $user->profile()->create([
          'user_id' => $user->id
        ]);
      }


    }
}
