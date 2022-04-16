<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_id'=>1,
            'name' => 'warehouse',
        ]);

        User::create([
            'user_id'=>2,
            'name' => 'warehouse1',
        ]);

        
    }
}
