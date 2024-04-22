<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\student;


use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        $studentData = student::all();
        return view('index', compact('studentData'));
    }
    public function store(Request $request){
        $data =$request->all();
        // DB::table('students')->insert([
        //     'name'=> $data['name'],
        //     'email'=> $data['email'],
        //     'phone'=> $data['phone'],
        //     'address'=> $data['address'],
        // ]);
        student::create($data);
        return redirect('/');
    }
    public function about(){
        return view('about');
    }
     public function news(){
     return view('news');
    }
    public function contact(){
        return view('contact');
    }


}