<?php

namespace Database\Seeders;

use App\Models\Warehouse;
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
        Warehouse::create([
            'user_id'=>1,
            'name' => 'warehouse',
        ]);

        Warehouse::create([
            'user_id'=>2,
            'name' => 'warehouse1',
        ]);

        
    }
}
