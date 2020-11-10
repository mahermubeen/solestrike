<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;
use DateTimeZone;

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

        foreach($users as $user){

            $dateTime = new DateTime($user->created_at, new DateTimeZone('Asia/Karachi')); 
            $user->created_at = $dateTime->format("d.m.y");
            //format("d.m.y  h:i A")
        }


        return view('users/index')->with(['users' => $users]);
    }

    public function updateStatus(Request $request, $id)
    {

            $status = $request->input('status');
            
            

            if($status === true){
                $data['active'] = 1;

            }else{
                $data['active'] = 0;

            }
            

           
            $this->user->edit_users($data, $id);

            return response()->json(['message'=>'Status changed successfully.']);
    }





    public function add_user(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        

        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        );

        $id = $this->user->add($data);

        if ($id > 0)
            return redirect()->back()->with('message', 'User added successfully.');
        else
            return redirect()->back()->withInput()->withErrors();
      
    }



    public function delete_user($id){
        $this->user->delete_user($id);

        return redirect()->back()->with('message', 'User Deleted successfully.');
    }

    public function show_user($id){

        $users =  DB::table('users')->find($id);

        return response()->json($users);
    }

    public function edit_user(Request $request, $id){
        $this->validate($request, [
            'name'  => 'required|min:3',
            'email'  => 'required|email'
        ]);


        $data = array(
            'name'  => $request['name'],
            'email'  => $request['email'],
        );

        

        $id = $this->user->edit_users($data, $id);

        if ($id > 0)
            return redirect()->back()->with('message', 'User Updated successfully.');
        else
            return redirect()->back()->withErrors()->withInput();
    }
}
