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

    public function edit($id)
    {
        //$student = DB:: table('students')->where('id', $id)->first();
        $student =student::where('id', $id)->first();
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $data =$request->all();
        // remove token from data
        unset($data['_token']);
        //DB:: table('students')->where('id', $id)->update([
        //    'name' => $data['name'],
        //    'name' => $data['email'],
        //    'name' => $data['phone'],
        //    'name' => $data['address']
        // ]);
        student::where('id', $id)->update($data);
        return redirect('/');
    }

    public function delete($id)
    {
        //DB:: table('students')->where('id', $id)->delete();
        student::where('id',$id)->delete();
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