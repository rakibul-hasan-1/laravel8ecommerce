<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileuploads;

class AdminSettingComponent extends Component
{
    use WithFileuploads;
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twitter;
    public $facebook;
    public $pinterest;
    public $instagram;
    public $youtube;
    public $site_logo;
    public $newlogo;
    public $privacy_and_policy;
    public $terms_and_conditions;
    public $return_policy;
    public $copyright;

    public function mount()
    {
        $setting=Setting::find(1);
        if($setting){
            $this->email=$setting->email;
            $this->phone=$setting->phone;
            $this->phone2=$setting->phone2;
            $this->address=$setting->address;
            $this->map=$setting->map;
            $this->twitter=$setting->twitter;
            $this->facebook=$setting->facebook;
            $this->pinterest=$setting->pinterest;
            $this->instagram=$setting->instagram;
            $this->youtube=$setting->youtube;
            $this->site_logo=$setting->site_logo;
            $this->privacy_and_policy=$setting->privacy_and_policy;
            $this->terms_and_conditions=$setting->terms_and_conditions;
            $this->return_policy=$setting->return_policy;
            $this->copyright=$setting->copyright;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'email'=>'required|email',
            'phone'=>'required',
            'phone2'=>'required',
            'address'=>'required',
            'map'=>'required',
            'twitter'=>'required',
            'facebook'=>'required',
            'pinterest'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'privacy_and_policy'=>'required',
            'terms_and_conditions'=>'required',
            'return_policy'=>'required',
            'copyright'=>'required'

        ]);
        if($this->newlogo){
            $this->validateOnly($fields,[
                'newlogo'=>'required|mimes:jpg,jpeg,png'
            ]);
        }
    }

    public function saveSetting()
    {
        $this->validate([
            'email'=>'required|email',
            'phone'=>'required',
            'phone2'=>'required',
            'address'=>'required',
            'map'=>'required',
            'twitter'=>'required',
            'facebook'=>'required',
            'pinterest'=>'required',
            'instagram'=>'required',
            'youtube'=>'required',
            'privacy_and_policy'=>'required',
            'terms_and_conditions'=>'required',
            'return_policy'=>'required',
            'copyright'=>'required'

        ]);
        if($this->newlogo){
            $this->validate([
                'newlogo'=>'required|mimes:jpg,jpeg,png'
            ]);
        }
        $setting=Setting::find(1);
        if(!$setting){
            $setting=new Setting();
        }
        $setting->email=$this->email;
        $setting->phone=$this->phone;
        $setting->phone2=$this->phone2;
        $setting->address=$this->address;
        $setting->map=$this->map;
        $setting->twitter=$this->twitter;
        $setting->facebook=$this->facebook;
        $setting->pinterest=$this->pinterest;
        $setting->instagram=$this->instagram;
        $setting->youtube=$this->youtube;
        if($this->newlogo){
            unlink('assets/images/logo'.'/'.$setting->site_logo);
            $logoName=Carbon::now()->timestamp.'.'.$this->newlogo->extension();
            $this->newlogo->storeAs('logo',$logoName);
            $setting->site_logo=$logoName;
        }
        $setting->privacy_and_policy=$this->privacy_and_policy;
        $setting->terms_and_conditions=$this->terms_and_conditions;
        $setting->return_policy=$this->return_policy;
        $setting->copyright=$this->copyright;
        $setting->save();
        session()->flash('setting_message','Setting has been save successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layout.base');
    }
}
