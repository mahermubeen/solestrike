<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\order;
use Illuminate\Support\Facades\Response;

class ShopController extends Controller
{
    private $product;
    private $order;


    public function __construct()
    {
        $this->middleware('auth');
        $this->product = new Product();
        $this->order = new order();
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
        
        return view('user/shop')->with($vars);
    }
}
