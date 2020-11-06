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

class ProfileController extends Controller
{

    private $user;


    public function __construct()
    {
        $this->middleware('admin');
        $this->user = new ModelsUser();
    }

    public function index()
    {
        return view('profile/edit');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['required', 'same:new_password'],
        ]);
   
        DB::table('users')->where('id', auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->back()->with('message', 'Password Changed Successfully!');
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
        ]);
   
        DB::table('users')->where('id', auth()->user()->id)->update(['name'=> $request->name, 'email' => $request->email]);
   
        return redirect()->back()->with('message1', 'Name and Email Changed Successfully!');
    }

    public function users()
    {
        $users = DB::table('users')->get();

        return view('users/index')->with(['users' => $users]);
    }

    public function updateStatus(Request $request, $id)
    {

            $status = $request->input('status');
            $data['active'] = (int) $status;

            // dd($data['active']);
            $id = $this->user->edit_users($data, $id);

            if ($id > 0)
                return redirect()->back()->with('message', 'Product added successfully.');
            else
                return redirect()->back()->with('error', 'Error! Please try again.')->withInput();
    }
}
