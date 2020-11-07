<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $users = [
            ['name' => 'admin', 'is_admin' => '1', 'email' => 'admin@gmail.com', 'password' => Hash::make('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'bunny', 'is_admin' => '0', 'email' => 'bunny@gmail.com', 'password' => Hash::make('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['name' => 'user', 'is_admin' => '0', 'email' => 'user@gmail.com', 'password' => Hash::make('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        User::insert($users);


        $products = [
            ['quantity'=>'5', 'name' => 'Nike', 'retail_price' => '$350', 'availability' => '1', 'release_date' => '04.18.2020', 'source' => 'Shopify', 'deal' => '$50', 'detail' => 'Having originally supposed to have made a return again in 2017, the Air Jordan 13 ‘Flint’ is back for the fourth time in true original form.' , 'avatar' => '' , 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        // Product::insert($products);
    }
}
