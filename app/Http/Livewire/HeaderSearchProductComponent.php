<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchProductComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount(){
        $this->product_cat='All Category';
        $this->fill(request()->only('search','product_cat','product-cat_id'));
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.header-search-product-component',['categories'=>$categories]);
    }
}