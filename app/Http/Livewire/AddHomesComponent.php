<?php

namespace App\Http\Livewire;

use App\Models\Homes;
use Livewire\Component;

class AddHomesComponent extends Component
{
    public $name;
    public $email;
    public $phone;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
            $homes=new Homes();
            $homes->name=$this->name;
            $homes->email=$this->email;
            $homes->phone=$this->phone;
            $homes->save();
            session()->flash('message','Homes Added successfully');
    }
    public function render()
    {
        return view('livewire.add-homes-component')->layout('layout.base');
    }
}
