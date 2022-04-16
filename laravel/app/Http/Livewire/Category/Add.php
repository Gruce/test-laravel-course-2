<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Add extends Component
{
    public $name;
    public function add(){
        Category::create([
            'name' => $this->name,
        ]);
        $this->emitTo('category.show', '$refresh');
    }
    public function render()
    {
        return view('livewire.category.add');
    }
}
