<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;


class HomeController extends Controller
{
    private $product;

    public function __construct()
    {
        $this->middleware('auth');
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
        
        return view('home')->with(['products' => $products]);
    }
}
