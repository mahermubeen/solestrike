<?php

namespace App\Models;

use App\Deliver_order;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'address', 'zip', 'city', 'state', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function add($data) {
        $user = User::create($data);
        return $user->id;
    }

    public function get_users() {
        return User::all();
    }

    public function get_user($id) {
        return User::where('id', $id);
    }

    public function find_id($email){
        return User::where('email', $email)->first()->id;
    }

    public function edit_users($data, $id) {
        return User::where('id',$id)->update($data);
    }

    public function delete_user($id) {
        User::where('id', $id) -> delete();
    }

    public function update_avatar($data, $where) {
        return User::where($where) -> update($data);
    }

    
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
