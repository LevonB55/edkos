<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           'first_name' => 'Jack',
           'last_name' => 'Owen',
           'email' => 'jack@example.com',
           'password' => bcrypt('12345678')
        ]);

        User::insert([
            'first_name' => 'Michael',
            'last_name' => 'Smith',
            'email' => 'michael@example.com',
            'password' => bcrypt('12345678')
        ]);

        User::insert([
            'first_name' => 'Steve',
            'last_name' => 'Doe',
            'email' => 'steve@example.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
