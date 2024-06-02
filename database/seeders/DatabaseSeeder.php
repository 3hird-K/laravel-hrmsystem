<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'username' => 'Administrator',
            'email'=> 'admin@laravel.com',
            'password' => Hash::make('pass2k24'),
        ]);

        User::factory()->create([
            'username' => 'Hrm_Overflow',
            'email'=> 'overflow@homeoffice.com',
            'password' => Hash::make('HomeOffice'),
        ]);
    }
}
