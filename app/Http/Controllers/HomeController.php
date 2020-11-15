<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;

class HomeController extends Controller
{
    private $product;
    private $order;

    public function __construct()
    {
        $this->product = new Product();
        $this->order = new Order();
    }

    public function index()
    {
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

    public function cart()
    {
        $orders = $this->order->count('id');

        $vars = [
            'orders'   => $orders
        ];

        return view('user/cart')->with($vars);
    }

    public function checkout()
    {
        $orders = $this->order->count('id');

        $vars = [
            'orders'   => $orders
        ];

        return view('user/checkout')->with($vars);
    }
}
