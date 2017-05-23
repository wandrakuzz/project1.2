<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileTable extends Seeder
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
              'user_id'   => '1',
            'nama_penuh'  => 'Dr Suhaila binti Zainudin',
            'gender'      => 'Perempuan',
            'kursus'      => 'Computer Science (CS)',
            'tahun'       => '1',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '2',
            'nama_penuh'  => 'Mohamad Azwan bin Halim',
            'gender'      => 'Lelaki',
            'kursus'      => 'Software Engineering Information System (SEIS)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '3',
            'nama_penuh'  => 'Siti Nur Atifah binti Ramli',
            'gender'      => 'Perempuan',
            'kursus'      => 'Computer Science (CS)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '4',
            'nama_penuh'  => 'Norfayanis binti Yamaudin',
            'gender'      => 'Perempuan',
            'kursus'      => 'Information Technology (TM)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '5',
            'nama_penuh'  => 'Nor Laila binti Bakar',
            'gender'      => 'Perempuan',
            'kursus'      => 'Information Technology (TM)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '6',
            'nama_penuh'  => 'Nik Nor Athirah binti Nik Yusof',
            'gender'      => 'Perempuan',
            'kursus'      => 'Information Technology (TM)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '7',
            'nama_penuh'  => 'Zatty Umirah binti Misbah',
            'gender'      => 'Perempuan',
            'kursus'      => 'Software Engineering Information System (SEIS)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
          [
              'user_id'   => '8',
            'nama_penuh'  => 'Norazlin Hani binti Sabu',
            'gender'      => 'Perempuan',
            'kursus'      => 'Software Engineering Multimedia (SEMM)',
            'tahun'       => '3',
            'no_tel'      => '017-2672769',
            'picture'     => null,
          ],
        ];

        foreach ($data as $datum) {
          Profile::create($datum);

        //   $user->profile()->create([
        //     'user_id' => $user->id
        //   ]);
        }
    }
}
