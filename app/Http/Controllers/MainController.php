<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function __invoke(){
        return view('main.404');

    }
    public function index(){
        return view('main.index');
    }

    public function about(){
        return view('main.AboutUs');
    }

    public function classes(){
        return view('main.classes');
    }

    public function facilites(){
        return view('main.facilites');
    }

    public function teacher(){
        return view('main.teacher');
    }

    public function becomeTeacher(){
        return view('main.becomeTeacher');
    }

    public function appointments(){
        return view('main.appointments');
    }
    public function testimonials(){
        return view('main.testimonials');
    }

    public function contact(){
        return view('main.ContactUs');
    }

}
