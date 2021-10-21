<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class ReturnPolicyComponent extends Component
{
    public function render()
    {
        $settings=Setting::find(1);
        return view('livewire.return-policy-component',['settings'=>$settings])->layout('layout.base');
    }
}
