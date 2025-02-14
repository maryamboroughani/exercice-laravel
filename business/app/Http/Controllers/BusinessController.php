<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){
        //return $request;
        return view('contact' , ['data' =>$request]);
    }
}
