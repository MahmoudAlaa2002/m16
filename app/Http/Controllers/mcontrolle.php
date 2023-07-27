<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mcontrolle extends Controller{



    function about() {
        return view('personal.about');
    }


    function services() {
        return view('personal.services');
    }


    function portfolio() {
        return view('personal.portfolio');
    }


    function contact() {
        return view('personal.contact');
    }


    function form3(Request $request){



        $request->validate([
            'name' => 'required|min:4|max:30',
            'email' => 'required|ends_with:@gmail.com',
            'phone' =>'required',
            'age' => 'required|gt:18',
            'massage'=>'required'
        ]);

        dd($request->all());

        $name    = $request->name;
        $email   = $request->email;
        $age     = $request->age;
        $phone   = $request->phone;
        $message = $request->message;

        return view ('form3' , compact('name' , 'email' , 'phone' , 'age' ,'message'));
       }


    }




