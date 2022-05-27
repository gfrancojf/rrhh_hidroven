<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        
        User::create([
            'name' => 'GLINYER FRANCO',
            'email' => 'gsis@hidroven.tech',
            'email_verified_at' => "2021-10-1",
            'password' => Hash::make('19721927'),
            'type_user' => 1
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'email_verified_at' => "2021-10-1",
            'password' => Hash::make('password'),
            'type_user' => 1
        ]);

        User::create([
            'name' => 'Sub Administrador',
            'email' => 'subadmin@admin.com',
            'email_verified_at' => "2021-10-1",
            'password' => Hash::make('password'),
            'type_user' => 0
        ]);
    }
}
