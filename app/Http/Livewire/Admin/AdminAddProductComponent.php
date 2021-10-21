<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileuploads;


class AdminAddProductComponent extends Component
{
    use WithFileuploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id ;
    public $images;

    public function mount(){
        $this->stock_status='instock';
        $this->featured=0;
    }


    public function generateslug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug'=>  'required|unique:products',
            'short_description'=> 'required',
            'description' => 'required',
            'regular_price'=> 'required|numeric',
            'sku'=> 'required',
            'stock_status'=> 'required',
            'featured'=> 'required',
            'quantity'=> 'required|numeric',
            'image'=> 'required|mimes:jpeg,png',
            'category_id'=> 'required'
        ]);
    }

    public function addproduct(){

        $this->validate([
            'name' => 'required',
            'slug'=>  'required|unique:products',
            'short_description'=> 'required',
            'description' => 'required',
            'regular_price'=> 'required|numeric',
            'sku'=> 'required',
            'stock_status'=> 'required',
            'featured'=> 'required',
            'quantity'=> 'required|numeric',
            'image'=> 'required|mimes:jpeg,png',
            'category_id'=> 'required'
        ]);
        $product = new Product();
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->short_description=$this->short_description;
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->sku=$this->sku;
        $product->stock_status=$this->stock_status;
        $product->featured=$this->featured;
        $product->quantity=$this->quantity;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image=$imageName;

        if($this->images)
        {
        $imagesname='';
        foreach($this->images as $key=>$image){
            $imgName=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('products',$imgName);
            $imagesname=$imagesname.','.$imgName;
        }
        $product->images=$imagesname;
    }
        $product->category_id =$this->category_id ;
        $product->save();
        session()->flash('message','Product Has been Added Successfully!');

    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layout.base');
    }
}
