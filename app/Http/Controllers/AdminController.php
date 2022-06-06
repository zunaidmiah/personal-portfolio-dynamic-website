<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(true){
            return view('admin.index');
        } else{
            return view('admin.login');
        }
    }

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        $user = DB::table('users')->where('type', 'admin')->first();
        if(isset($user) and !empty($user))  
            return redirect()->route('login')->with('signup_message', "Already one admin has there!");
        return view('admin.signup');
    }

    public function forgot_password()
    {
        return view('admin.forgot-password');
    }

    public function store(Request $request)
    {
        if(isset($request) and !empty($request->all())){
            $user = new User();
            $user->name = $request->input('firstname')." ".$request->input('lastname');
            $user->email = $request->input('email');
            $user->type = 'admin';
            $user->password = Crypt::encrypt($request->input('password'));
            $user->save();
            return redirect()->route('login')->with('signin_message', "Registration successfully done!");
        } else{ 
            return redirect()->route('signup');
        }
    }


    public function authenticate(Request $request)
    {
        if(isset($request) and !empty($request->all())){
            $user = DB::table('users')->where('email', $request->input('email'))->first();
            if(isset($user) and !empty($user)){
                if(Crypt::decrypt($user->password) == $request->input('password')){
                    $request->session()->put('admin_loggedin', true);
                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('user_type', $user->type);
                    return redirect()->route('admin-dashboard');
                } else{
                    return redirect()->route('login')->with('signup_message', 'Sorry! Password didn`t matched.');
                }
            } else{
            return redirect()->route('login')->with('signup_message', 'Sorry! Email is incorrect.');
            }
        } else{ 
            return redirect()->route('login');
        }
    }


    public function logout(){
        session()->put('admin_loggedin', false);
        session()->put('user_id', false);
        session()->put('user_type', false);
        return redirect()->route('login');
    }

}
