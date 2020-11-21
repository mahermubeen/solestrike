<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Order;
use App\Cart;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    private $product;
    private $order;
    private $cart;


    public function __construct()
    {
        $this->middleware('auth');
        $this->product = new Product();
        $this->order = new Order();
        $this->cart = new Cart();
    }

    public function order_product($id)
    {
        $product = $this->product->get_product($id);
        
        $img = $product->avatar;
        $img = (string)$img;
        $product->avatar = json_decode($img);

        if(auth()->check()){
            $user_id = auth()->user()->id;
            $prod = $this->cart->where('user_id', $user_id)->count('id');
        }
        else{
            $prod = '0';
        }

        $vars = [
            'product'  => $product,
            'prod'  => $prod,
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
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        $f_name = $request['first_name'];
        $l_name = $request['last_name'];

        $full_name = $f_name . ' '. $l_name;

        $data = array(
            'shoe_size'  => $request['shoe_size'],
            'email'  => $request['email'],
            'full_name'  => $full_name,
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
            'user_id' => $request['user_id'],
        );

        $id = $this->cart->add($data);

        if ($id > 0)
            return redirect()->route('shop')->with('message', 'Order Added to Cart successfully.');
        else
            return redirect()->back()->withInputs()->withErrors();
      
    }

    public function delete_order($user_id, $prod_id){

        $this->cart->delete_cart($prod_id, $user_id);

        return response()->json(['message'=>'Product Deleted from Cart Successfully.']);
    }



    public function cart($id)
    {
        $product_id = DB::table('carts')->where('user_id', $id)->pluck('product_id');
        $products = Product::find($product_id);
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
            'products' => $products,
            'prod' => $prod,
        ];

        return view('user/cart')->with($vars);
    }

    public function checkout($id)
    {

        $product_id = DB::table('carts')->where('user_id', $id)->pluck('product_id');
        $products = Product::find($product_id);
        foreach($products as $product){
            $img = $product->avatar;
            $img = (string)$img;
            $product->avatar = json_decode($img);
        }


        $orders_detail = DB::table('carts')->where('user_id', $id)->get();
        foreach($orders_detail as $order){
            $order_id = $order->id;
            // dd($order_id);
        }
        


        
        $user = DB::table('carts')->where('user_id', $id)->get();
        $user = $user[0];

        
        $subtotal = Product::find($product_id)->sum('retail_price');


        $bills = Product::find($product_id)->pluck('retail_price');
        $total = 0;
        foreach($bills as $key => $bill){
            $item_price = $bill;
            $tax = ($item_price * 2) / 100;
            $total += $item_price - $tax;
        }
        // dd($total);


        if(auth()->check()){
            $user_id = auth()->user()->id;
            $prod = $this->cart->where('user_id', $user_id)->count('id');
        }
        else{
            $prod = '0';
        }

        $vars = [
            'products' => $products,
            'user' => $user,
            'subtotal' => $subtotal,      
            'total' => $total,
            'prod' => $prod,
            'order_id' => $order_id,
        ];

        return view('user/checkout')->with($vars);
    }


    public function show_shipping($id){
        $order = $this->order->get_info($id);

        return response()->json($order);
    }


    public function place_order(Request $request){
        $this->validate($request, [
            'total_price' => 'required',
        ]);

        $id_user = auth()->user()->id;
        $order_detail =  DB::table('carts')->where('user_id', $id_user)->get();
        $order = $order_detail[0];
        $data = array(
            'shoe_size'  => $order->shoe_size,
            'email'  => $order->email,
            'full_name'  => $order->full_name,
            'address_1'  => $order->address_1,
            'address_2'  => $order->address_2,
            'phone'  => $order->phone,
            'city'  => $order->city,
            'state' => $order->state,
            'country' => $order->country,
            'zip' => $order->zip,
            'card_type' => $order->card_type,
            'card_number' => $order->card_number,
            'month' => $order->month,
            'year' => $order->year,
            'cvv' => $order->cvv,
            'total_price' => $request['total_price'],
            'product_id' => $order->product_id,
            'user_id' => $order->user_id,
        );
        $id = $this->order->add($data);


        $user_id = auth()->user()->id;
        $this->cart->delete_carts($user_id);

        if ($id > 0)
            return redirect()->route('shop')->with('message', 'Order has been Placed Successfully.');
        else
            return redirect()->back()->withInputs()->withErrors();
    }
}
