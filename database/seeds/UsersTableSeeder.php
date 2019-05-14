<?php

use App\User;
use Illuminate\Support\Str;
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
        $user  = User::create([
            'name' => 'test account',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('testtest'),
            'remember_token' => Str::random(10),
        ]);
    }
}
