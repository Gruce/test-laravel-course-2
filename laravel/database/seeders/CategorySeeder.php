<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'warehouse_id'=>1,
            'name' => 'جبس',
             'product_count'=>2
        ]);

        User::create([
            'warehouse_id'=>2,
            'name' => 'ملابس',
             'product_count'=>3
        ]);

        }
}
