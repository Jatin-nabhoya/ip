<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileuploadcontroller extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(request $request){
        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $name = time()."-JN".$file->getClientOriginalName();
        //     $file->move(public_path().'/images/',$name);
        // }
        // $data = array('image'=>$name);
        // return view('upload')->with($data);
        
        $name = time() . "-JN." . $request->file('file')->getClientOriginalExtension();
        echo $request->file('file')->storeAs('Fupload',$name);

    }
}
