<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(KelabsTableSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(JawatanTable::class);
         $this->call(KursusTableSeeder::class);
         $this->call(ProfileTable::class);
    }
}
