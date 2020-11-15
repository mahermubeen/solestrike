<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $product;
    private $order;

    // public function group_by($key, $data)
    // {
    //     $result = array();

    //     foreach ($data as $val) {
    //         if (array_key_exists($key, $val)) {
    //             $result[$val[$key]][] = $val;
    //         } else {
    //             $result[""][] = $val;
    //         }
    //     }

    //     return $result;
    // }

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
        
        $prod = $this->order->count('id');

        $vars = [
            'products'  => $products,
            'prod'   => $prod
        ];

        return view('home')->with($vars);
    }

    public function cart()
    {
        $prod = $this->order->count('id');

        $product_id = DB::table('orders')->pluck('product_id');
        $products = Product::find($product_id);
        foreach($products as $product){
            $img = $product->avatar;
            $img = (string)$img;
            $product->avatar = json_decode($img);
        }

        $vars = [
            'prod'   => $prod,
            'products' => $products
        ];

        return view('user/cart')->with($vars);
    }

    public function checkout()
    {
        $prod = $this->order->count('id');

        $product_id = DB::table('orders')->pluck('product_id');
        $products = Product::find($product_id);
        foreach($products as $product){
            $img = $product->avatar;
            $img = (string)$img;
            $product->avatar = json_decode($img);
        }

        $orders = $this->order->get_orders();

        $vars = [
            'prod'   => $prod,
            'products' => $products,
            'orders' => $orders,
        ];

        return view('user/checkout')->with($vars);
    }
}
