<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;

use Illuminate\Support\Facades\DB;

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

        
        $vars = [
            'products'  => $products,
        ];

        return view('home')->with($vars);
    }

    
}
