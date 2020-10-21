<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('profile/edit');
    }

    public function users()
    {
        return view('users/index');
    }

    public function icons()
    {
        return view('pages/icons');
    }

    public function notifications()
    {
        return view('pages/notifications');
    }

    public function table_list()
    {
        return view('pages/table_list');
    }
}
