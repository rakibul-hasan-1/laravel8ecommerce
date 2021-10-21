<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class PrivacyAndPolicyComponent extends Component
{
    public function render()
    {
        $settings=Setting::find(1);
        return view('livewire.privacy-and-policy-component',['settings'=>$settings])->layout('layout.base');
    }
}
