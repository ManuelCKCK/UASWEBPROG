<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class AccountController extends Controller
{
    public function index(){
        return view('mainmenu');
    }
    public function register(){
        return view('register');
    }
    public function user(Request $request){
        // $rules = [
        //     'first_name' => 'required|max:25',
        //     'last_name' => 'required|max:25',
        // ];

        // $messages = [
        //     'required' => 'fill all the blanks',
        //     'inputPrice.numberic' => 'price must be numeric'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator->fails()){
        //     return back()->withErrors($validator);
        // }
        $imageUrl = 'images/'.$request->image;

        DB::table('accounts')->insert([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'role_id' => $request->roles,
            'gender_id' => $request->gender,
            'password' => $request->password,
            'display_picture_link' => $imageUrl,
            'remember_token' => rand(0,15)
        ]);

        return redirect('/login');
    }

    public function logindata(){
        $user = Account::all();
        return view('login',$user);
    }
    public function login(Request $request){
        
        $user_data = Account::where('email','LIKE',"%$request->email")->first();
        if($user_data == null){
            return redirect()->back()->withErrors(['errors'=>'Email or Password is incorrect']);
        }

        if (($user_data->email == $request->email) && ($user_data->password == $request->password)) {
            if ($user_data->role_id == 2) {
                return redirect()->intended("/admin/$user_data->account_id");
            }else {
                return redirect()->intended("/user/$user_data->account_id");
            }
             
        }  
          return redirect()->back()->withErrors(['errors'=>'Email or Password is incorrect']);
    }
    public function admin(){
        return view('admin');
    }
    public function userhome(){
        return view('user');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function showprofile($id){
        $profile = DB::table('accounts')->where('account_id','=','1')->get();

        return view('profileuser',compact('profile'));
    }
    public function showprofileadmin($id){
        $profile = DB::table('accounts')->where('account_id','=','2')->get();

        return view('adminprofile',compact('profile'));
    }
    public function showprofileall($id){
        $profile = DB::table('accounts')->get();

        return view('accmain',compact('profile'));
    }
    public function adminhome(){
        return view('admin');
    }
    public function updaterole(Request $request){
        $post = Account::find($request->account_id);

        return view('updaterole' , compact('post'));
    }
    public function deleteacc($id){
        DB::table('accounts')->where('account_id','=',$id)->delete();
        return redirect()->back();
     }   
}