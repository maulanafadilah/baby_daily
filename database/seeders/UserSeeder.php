<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'nama_lengkap' => 'Ahmad',
        //     'nomor_telepon' => '08213xxxx',
        //     'email' => 'ahmad@gmail.com',
        //     'password' => Hash::make('1234'),
        //     'id_peranan' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}
