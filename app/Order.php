<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoe_size', 'email', 'full_name', 'address_1', 'address_2', 'phone', 'city', 'state', 'country', 'zip', 'card_type', 'card_number', 'month', 'year', 'cvv', 'product_id', 'user_id'
    ];

    public function add($data) {
        $order = Order::create($data);
        return $order->id;
    }

    public function get_orders() {
        return Order::all();
    }

    public function get_order($id) {
        return Order::where('user_id', $id);
    }

    public function get_info($id) {
        return Order::find($id);
    }

    public function find_id($email){
        return Order::where('email', $email)->first()->id;
    }

    public function edit_orders($data, $id) {
        return Order::where('id', $id)->update($data);
    }
    
    public function delete_order($prod_id, $user_id) {
        Order::where([['product_id', '=',  $prod_id],['user_id', '=', $user_id],])->delete();
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
