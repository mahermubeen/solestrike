<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Order;


class HomeController extends Controller
{
    private $product;
    private $order;

    public function __construct()
    {
        $this->middleware('auth');
        $this->order = new Order();
        $this->product = new Product();
    }


    public function index()
    {
        $products = Product::count();

        if($products == 0){
            $orders = $this->order->count('id');

            $vars = [
                'orders'   => $orders
            ];

            return view('home')->with($vars);
        }
        else{
            $products = $this->product->get_products();

            foreach($products as $product){
                $img = $product->avatar;
                $img = (string)$img;
                $product->avatar = json_decode($img);
            }
    
            $orders = $this->order->count('id');
            
    
            $vars = [
                'products'  => $products,
                'orders'   => $orders
            ];
            
            return view('home')->with($vars);
        }

        

        
    }
}
