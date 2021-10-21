<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Setting;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function render()
    {
        $slider=HomeSlider::where('status',1)->get();
        $lproduct=Product::orderBy('created_at','DESC')->get()->take(8);
        $category=HomeCategory::find(1);
        $cats=explode(',',$category->sel_categories);
        $categories=Category::whereIn('id',$cats)->get();
        $no_of_products=$category->no_of_products;
        $sproducts=Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale=Sale::find(1);
        $setting=Setting::find(1);
        if(Auth::check()){
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',['slider'=>$slider,'lproduct'=>$lproduct,'categories'=>$categories,'no_of_products'=>$no_of_products,'sproducts'=>$sproducts,'sale'=>$sale,'setting'=>$setting])->layout('layout.base');
    }
}
