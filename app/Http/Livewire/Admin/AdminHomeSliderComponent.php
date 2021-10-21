<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteslider($slider_id){
        $slider=HomeSlider::find($slider_id);
        $slider->delete();
        session()->flash('message','Slider deleted successfully!');
    }
    public function render()
    {
        $slider=HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['slider'=>$slider])->layout('layout.base');
    }
}
