<?php

namespace App\Http\Controllers\Admin;
use App\User;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use App\Order;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    private $user;
    private $order;

    public function __construct()
    {
        $this->middleware('admin');
        $this->user = new ModelsUser();
        $this->order = new Order();
    }


    public function index()
    {
        return view('admin/dashboard');
    }

    public function orders()
    {
        $orders = $this->order->get_orders();

        $vars = [
            'orders'  => $orders,
        ];

        return view('/admin/orders/index')->with($vars);
    }

    public function delete_order($id){
        $this->order->delete_orderr($id);

        return redirect()->back()->with('message', 'Order Deleted successfully.');
    }

    // public function icons()
    // {
    //     return view('pages/icons');
    // }

    // public function notifications()
    // {
    //     return view('pages/notifications');
    // }

    // public function table_list()
    // {
    //     return view('pages/table_list');
    // }

    
}
