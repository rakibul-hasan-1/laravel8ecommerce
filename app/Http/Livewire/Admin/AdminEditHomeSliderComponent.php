<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $slider_id;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;

    public function mount($slider_id){
        $this->slider_id=$slider_id;
        $slider=HomeSlider::where('id',$slider_id)->first();
        $this->slider_id=$slider->id;
        $this->title=$slider->title;
        $this->subtitle=$slider->subtitle;
        $this->price=$slider->price;
        $this->link=$slider->link;
        $this->image=$slider->image;
        $this->status=$slider->status;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'subtitle'=>'required',
            'price'=>'required|numeric',
            'link'=>'required',
            'status'=>'required'
        ]);
    }
    public function updateslider(){
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'price'=>'required|numeric',
            'link'=>'required',
            'status'=>'required'
        ]);
        $slider=HomeSlider::find($this->slider_id);
        $slider->title=$this->title;
        $slider->subtitle=$this->subtitle;
        $slider->price=$this->price;
        $slider->link=$this->link;
        if($this->newimage){
            $imageName=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sliders',$imageName);
            $slider->image=$imageName;
        }
        $slider->status=$this->status;
        $slider->save();
        session()->flash('message','slider has been updated successfully!');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layout.base');
    }
}
