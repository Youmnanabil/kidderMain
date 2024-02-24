<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.auth.adminLogin');
    }

    public function checklogin( Request $request){
        
        $data = $request->validate([
            'email'=>'required|string',
            'password'=>'required',
        ]);

        $cardinality =[
            'email'=>$request->email,
             'password'=>$request->password
        ]; 
        if(Auth::guard('admin')->attempt($cardinality)){
            return view('admin.index');
        }else{
            return redirect()->back()
            ->withInput('email'->$request->email)->with('errorResponse', 'these records do not match!');
        }
    }

    public function logout(){
        
        Auth::guard('admin')->logout();

        return view('admin.auth.adminLogin');
    }
}
