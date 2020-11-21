<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Response;

class ShopController extends Controller
{
    private $product;
    private $order;


    public function __construct()
    {
        $this->middleware('auth');
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
        
        return view('user/shop')->with($vars);
    }
}
