<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Response;
use Image;


class ProductController extends Controller
{

    private $product;

    public function __construct()
    {
        $this->middleware('admin');
        $this->product = new Product();
    }


    public function index()
    {
        $products = $this->product->get_products();

        foreach($products as $product){
            $img = $product->avatar;
            $img = str_replace('"', '', $img);
            $product->avatar = $img;
        }
        
        return view('products/index')->with(['products' => $products]);
    }

    public function add_product(Request $request)
    {
        
        $this->validate($request, [
            'quantity'  => 'required',
            'name'  => 'required',
            'retail_price'  => 'required',
            'release_date'  => 'required',
            'source'  => 'required',
            'deal'  => 'required',
            'detail'  => 'required',
            'avatar' => 'required|max:2048'
        ]);
      
        $image_file = $request->avatar;

        $name = time() . '.' . $image_file->getClientOriginalExtension();
        $path = 'images/' . $name;
        Image::make($image_file)->resize(300, 300)->save($path);
        

        $data = array(
            'quantity'  => $request['quantity'],
            'name'  => $request['name'],
            'retail_price'  => $request['retail_price'],
            'release_date'  => $request['release_date'],
            'source'  => $request['source'],
            'deal'  => $request['deal'],
            'detail'  => $request['detail'],
            'avatar' => $name
        );

        $id = $this->product->add($data);

        if ($id > 0)
            return redirect()->back()->with('message', 'Product added successfully.');
        else
            return redirect()->back()->withInput()->withErrors();
      
    }


    public function show_product($id){
        $prod = $this->product->get_product($id);

        return Response::JSON($prod);
    }


    public function delete_product($id){
        $this->product->delete_product($id);

        return redirect()->back()->with('message', 'Product Deleted successfully.');
    }

    
    public function edit_product(Request $request, $id){
        $this->validate($request, [
            'quantity'  => 'required',
            'name'  => 'required',
            'retail_price'  => 'required',
            'release_date'  => 'required',
            'source'  => 'required',
            'deal'  => 'required',
            'detail'  => 'required',
        ]);


        

        if(!empty($request->file('avatar'))){
            $file = $request->file('avatar');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $img = json_encode($name);

            $data = array(
                'quantity'  => $request['quantity'],
                'name'  => $request['name'],
                'retail_price'  => $request['retail_price'],
                'release_date'  => $request['release_date'],
                'source'  => $request['source'],
                'deal'  => $request['deal'],
                'detail'  => $request['detail'],
                'avatar' => $img
            );
        }else{
            $data = array(
                'quantity'  => $request['quantity'],
                'name'  => $request['name'],
                'retail_price'  => $request['retail_price'],
                'release_date'  => $request['release_date'],
                'source'  => $request['source'],
                'deal'  => $request['deal'],
                'detail'  => $request['detail'],
            );
        }

        

        $id = $this->product->edit_products($data, $id);

        if ($id > 0)
            return redirect()->back()->with('message', 'Product Updated successfully.');
        else
            return redirect()->back()->withErrors()->withInput();
    }
}
