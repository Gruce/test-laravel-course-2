<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warehouse;
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
