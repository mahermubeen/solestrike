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
        $products = $this->product->get_products();

        foreach($products as $product){
            $img = $product->avatar;
            $img = (string)$img;
            $product->avatar = json_decode($img);
        }
        
        if(auth()->check()){
            $user_id = auth()->user()->id;
            $prod = $this->order->where('user_id', $user_id)->count('id');
        }
        else{
            $prod = '0';
        }
       

        $vars = [
            'products'  => $products,
            'prod'  => $prod,
        ];

        return view('home')->with($vars);
    }
}
