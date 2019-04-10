<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed admin into users table in database
        DB::table('users')->insert([
            'fName' => 'admin',
            'lName' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        DB::table('users')->insert([
            'fName' => 'test',
            'lName' => 'dummy',
            'email' => 'testdummy.@gmail.com',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'fName' => Str::random(5),
            'lName' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => bcrypt('secret123'),
        ]);

        DB::table('users')->insert([
            'fName' => Str::random(5),
            'lName' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => bcrypt('secret123'),
        ]);
    }
}