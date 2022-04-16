<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'=>'mosa',
            'email' => 'mosa@email.com',
            'password' => '123456',

        ]);

        User::create([
            'name'=>'mohammed',
            'email' => 'mohammed@email.com',
            'password' => '123456',

        ]);
    }
}
