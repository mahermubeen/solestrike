<?php

namespace App\Http\Controllers\Admin;
use App\User;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    private $user;


    public function __construct()
    {
        $this->middleware('admin');
        $this->user = new ModelsUser();
    }


    public function index()
    {
        return view('admin/dashboard');
    }

    public function orders()
    {
        return view('/admin/orders/index');
    }

    // public function icons()
    // {
    //     return view('pages/icons');
    // }

    // public function notifications()
    // {
    //     return view('pages/notifications');
    // }

    // public function table_list()
    // {
    //     return view('pages/table_list');
    // }

    
}
