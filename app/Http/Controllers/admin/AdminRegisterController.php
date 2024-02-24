<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function register(){
        return view('admin.auth.adminRegister');
    }

    public function checkregister(Request $request ){
        
        $adminKey = 'Admin11';
        if($request->admin_key == $adminKey){

            $data = $request->validate([
                'name'=>'required|string',
                'email'=>'required|string',
                'admin_key'=>'required',
                'age'=>'required',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required',
            ]);
            session()->put('username', $data['name'] = $request->name);
            Admin::create($data);
            return view('admin.index');
        
        }else{
            return redirect()->back()->with('errorResponse', 'something went wrong!');
        }
        
    }
}
