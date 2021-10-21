<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SiteLogoComponent extends Component
{
    protected $listeners=['refreshComponent'=>'$refresh'];
    public function render()
    {
        $settings=Setting::find(1);
        return view('livewire.site-logo-component',['settings'=>$settings]);
    }
}
