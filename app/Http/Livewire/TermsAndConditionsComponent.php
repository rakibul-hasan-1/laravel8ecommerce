<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class TermsAndConditionsComponent extends Component
{
    public function render()
    {
        $settings=Setting::find(1);
        return view('livewire.terms-and-conditions-component',['settings'=>$settings])->layout('layout.base');
    }
}
