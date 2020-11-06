<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity', 'name', 'retail_price', 'release_date', 'source', 'deal', 'detail', 'avatar'
    ];

    public function add($data) {
        $product = Product::create($data);
        return $product->id;
    }

    public function get_products() {
        return Product::all();
    }

    public function get_product($id) {
        return Product::find($id);
    }

    public function find_id($email){
        return Product::where('email', $email)->first()->id;
    }

    public function edit_products($data, $id) {
        return Product::where('id', $id)->update($data);
    }

    public function delete_product($id) {
        Product::where('id', $id) -> delete();
    }

    public function update_pic($data, $where) {
        return Product::where($where) -> update($data);
    }
}
