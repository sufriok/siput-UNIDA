<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@test.com",
            'daerah' => "jakarta",
            'no_hp' => "08473843763",
            'password' => bcrypt('secret'),
        ]);
    }
}
