<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $order=Order::orderBy('created_at','DESC')->get()->take(10);
        $totalSales=Order::where('status','delivered')->count();
        $totalRevenue=Order::where('status','delivered')->sum('total');
        $todayTotalSales=Order::where('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayTotalRevenue=Order::where('status','delivered')->whereDate('created_at',Carbon::today())->sum('total');
        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$order,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,
            'todayTotalSales'=>$todayTotalSales,
            'todayTotalRevenue'=>$todayTotalRevenue
        ])->layout('layout.base');
    }
}
