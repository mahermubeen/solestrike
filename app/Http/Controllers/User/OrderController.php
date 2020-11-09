<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class OrderController extends Controller
{
    private $product;


    public function __construct()
    {
        $this->middleware('auth');
        $this->product = new Product();
    }

    public function order_product($id)
    {
        $product = $this->product->get_product($id);
        
        $img = $product->avatar;
        $img = (string)$img;
        $product->avatar = json_decode($img);
        
        return view('order')->with(['product' => $product]);
    }
}
