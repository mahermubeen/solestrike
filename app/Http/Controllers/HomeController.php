<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $product;
    private $cart;


    public function __construct()
    {
        $this->product = new Product();
        $this->cart = new Cart();
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
            $prod = $this->cart->where('user_id', $user_id)->count('id');
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
