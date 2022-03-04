<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test',
            'lastName' => 'User',
            'dni' => '11111112L',
            'accountNumber' => 'ES91 2100 0418 45 0200051332',
            'email' => 'seguridadweb@campusviu.es',
            'password' => bcrypt('S3gur1d4d?W3b'),
        ]);
    }
}
