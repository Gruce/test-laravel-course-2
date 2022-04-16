<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Add extends Component
{
    public $name, $categoryId,$warehouseId, $pieces_count, $price, $description;

    public function add()
    {
        Product::create([
            'name' => $this->name,
            'warehouse_id' => $this->warehouseId,
            'category_id' => $this->categoryId,
            'price' => $this->price,
            'pieces_count' => $this->pieces_count,
            'description' => $this->description,

        ]);

        $this->emitTo('product.show', '$refresh');
    }
    
    public function render()
    {
        $categories = Category::get();
        return view('livewire.product.add',['categories' => $categories]);
    }
}
