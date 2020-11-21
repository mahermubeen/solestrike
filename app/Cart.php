<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoe_size', 'email', 'full_name', 'address_1', 'address_2', 'phone', 'city', 'state', 'country', 'zip', 'card_type', 'card_number', 'month', 'year', 'cvv', 'product_id', 'user_id'
    ];

    public function add($data) {
        $cart = Cart::create($data);
        return $cart->id;
    }

    public function get_carts() {
        return Cart::all();
    }

    public function get_cart($id) {
        return Cart::where('user_id', $id);
    }

    public function get_info($id) {
        return Cart::find($id);
    }

    public function find_id($email){
        return Cart::where('email', $email)->first()->id;
    }

    public function edit_carts($data, $id) {
        return Cart::where('id', $id)->update($data);
    }
    
    public function delete_cart($prod_id, $user_id) {
        Cart::where([['product_id', '=',  $prod_id],['user_id', '=', $user_id],])->delete();
    }

    public function delete_carts($user_id) {
        Cart::where('user_id', $user_id)->delete();
    }


    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
