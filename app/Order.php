<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoe_size', 'email', 'first_name', 'last_name', 'address_1', 'address_2', 'phone', 'city', 'state', 'country', 'zip', 'card_type', 'card_number', 'month', 'year', 'cvv'
    ];

    public function add($data) {
        $order = Order::create($data);
        return $order->id;
    }

    public function get_orders() {
        return Order::all();
    }

    public function get_order($id) {
        return Order::find($id);
    }

    public function find_id($email){
        return Order::where('email', $email)->first()->id;
    }

    public function edit_orders($data, $id) {
        return Order::where('id', $id)->update($data);
    }
    
    public function delete_order($id) {
        Order::where('id', $id) -> delete();
    }

}
