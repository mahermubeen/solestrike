<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;


class HomeController extends Controller
{
    private $product;
    private $cart;

    public function __construct()
    {
        $this->middleware('auth');
        $this->cart = new Cart();
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
