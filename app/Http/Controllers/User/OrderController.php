<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Order;

class OrderController extends Controller
{
    private $product;
    private $order;


    public function __construct()
    {
        $this->middleware('auth');
        $this->product = new Product();
        $this->order = new Order();
    }

    public function order_product($id)
    {
        $product = $this->product->get_product($id);
        
        $img = $product->avatar;
        $img = (string)$img;
        $product->avatar = json_decode($img);

        $prod = $this->order->count('id');

        $vars = [
            'product'  => $product,
            'prod'   => $prod
        ];
        
        return view('user/order')->with($vars);
    }

    public function add_order(Request $request)
    {
        $this->validate($request, [
            'shoe_size'  => 'required|max:2',
            'email'  => 'required|email',
            'first_name'  => 'required|min:3',
            'last_name'  => 'required|min:3',
            'address_1'  => 'required',
            'address_2'  => 'required',
            'phone'  => 'required',
            'city'  => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'card_type' => 'required',
            'card_number' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required|min:3',
            'product_id' => 'required'
        ]);

        $data = array(
            'shoe_size'  => $request['shoe_size'],
            'email'  => $request['email'],
            'first_name'  => $request['first_name'],
            'last_name'  => $request['last_name'],
            'address_1'  => $request['address_1'],
            'address_2'  => $request['address_2'],
            'phone'  => $request['phone'],
            'city'  => $request['city'],
            'state' => $request['state'],
            'country' => $request['country'],
            'zip' => $request['zip'],
            'card_type' => $request['card_type'],
            'card_number' => $request['card_number'],
            'month' => $request['month'],
            'year' => $request['year'],
            'cvv' => $request['cvv'],
            'product_id' => $request['product_id'],
        );

        $id = $this->order->add($data);

        if ($id > 0)
            return redirect()->route('shop')->with('message', 'Order Added to Cart successfully.');
        else
            return redirect()->back()->withInputs()->withErrors();
      
    }

    public function delete_order($id){
        $this->order->delete_order($id);

        return response()->json(['message'=>'Status changed successfully.']);
    }
}
