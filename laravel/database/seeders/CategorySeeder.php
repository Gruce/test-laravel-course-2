<?php
namespace Database\Seeders;

use App\Models\Category;

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
        Category::create([
            'warehouse_id'=>1,
            'name' => 'جبس',

        ]);

        Category::create([
            'warehouse_id'=>2,
            'name' => 'ملابس',

        ]);

        }
}
