<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\PetProduct;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $total_order=Order::all()->count();
        $today_order=Order::where('created_at',Carbon::now())->get()->count();
        // dd($today_order);

        $total_user=User::where('roll','user')->count();
        $total_product=PetProduct::all()->count();
        $total_posts=Post::all()->count();

        return view('admin.pages.dashboard.dashboard',compact('total_order','today_order','total_user','total_product','total_posts'));
    }
}
