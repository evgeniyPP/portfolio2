<?php

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
        App\User::create([
            'login' => 'kerim',
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);
    }
}
