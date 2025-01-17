<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Antrian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role'  => 'admin'
        ]);
        Role::create([
            'role'  => 'pasien'
        ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('1234'),
            'role_id'   => 1
        ]);

        User::create([
            'name'      => 'Hikam',
            'email'     => 'hickam@gmail.com',
            'password'  => bcrypt('1234'),
            'role_id'   => 2
        ]);

        User::create([
            'name'      => 'Delisya',
            'email'     => 'delisya@gmail.com',
            'password'  => bcrypt('1234'),
            'role_id'   => 2
        ]);
        User::create([
            'name'      => 'Mesa',
            'email'     => 'mesa@gmail.com',
            'password'  => bcrypt('1234'),
            'role_id'   => 2
        ]);
    }
}
