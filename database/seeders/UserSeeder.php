<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'nip' => 1,
            'username' => 'admin',
            'nama' => 'admin',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ],
        [
            'nip' => 12345,
            'username' => 'kasir',
            'nama' => 'kasir',
            'password' => bcrypt('kasir'),
            'role_id' => 0
        ]]
        );
    }
}
