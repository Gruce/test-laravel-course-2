<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Show extends Component
{ 
    protected $listeners = ['$refresh',];
    public $name, $editId = null;
    

    public function delete($id){
        Category::findOrFail($id)->delete();
        $this->emitTo('category.show', '$refresh');
    }

    
    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        $this->editId = $categories->id;
        
    }
    public function update($id)
    {
        $editId = null;
        $categories = category::findOrFail($id);
        $categories->update([
            'name' => $this->name
        ]);
        
        
        $this->emitTo('Category.show', '$refresh');
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.category.show',  [
            'categories' => $categories,
        ]
        );
    }
}
