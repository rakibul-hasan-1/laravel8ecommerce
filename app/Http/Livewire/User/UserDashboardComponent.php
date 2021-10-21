<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $order=Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalSales=Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalRevenue=Order::where('status','delivered')->where('user_id',Auth::user()->id)->sum('total');
        $todayTotalSales=Order::where('status','delivered')->where('user_id',Auth::user()->id)->whereDate('created_at',Carbon::today())->count();
        $todayTotalRevenue=Order::where('status','delivered')->where('user_id',Auth::user()->id)->whereDate('created_at',Carbon::today())->sum('total');
        return view('livewire.user.user-dashboard-component',[
            'orders'=>$order,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,
            'todayTotalSales'=>$todayTotalSales,
            'todayTotalRevenue'=>$todayTotalRevenue
        ])->layout('layout.base');
    }
}
