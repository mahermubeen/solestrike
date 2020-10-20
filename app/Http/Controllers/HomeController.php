<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('dashboard');
    }

    public function profileEdit()
    {
        return view('profile/edit');
    }

    public function userIndex()
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
