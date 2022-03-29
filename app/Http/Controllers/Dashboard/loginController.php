<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('dashboard.auth.login');
    }

//    public function authenticate(Request $request)
//    {
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//
//        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();
//
//            return redirect()->intended('dashboard');
//        }
//
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.',
//        ])->onlyInput(['email']);
//    }
public function post(AdminLoginRequest $request){
    $remember_me= $request->has('remember_me') ? true : false;
    if (auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
        return redirect()->route('admin.dashboard');
    }
    return redirect()->back()->with(['error'=>'خطأ باليميل أو كلمة السر ']);

}
}
