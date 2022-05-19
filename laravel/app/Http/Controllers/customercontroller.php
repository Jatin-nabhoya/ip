<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customercontroller extends Controller
{
    public function create(){
        $customer = new customer();
        $url = url('customer/register');
        $title ="Customer Registration";
        $read ='';
        $data = compact('customer', 'title','url' , 'read');
        return view('customer', $data);
    }
    
    public function customer(request $request){
        
        $request->validate
            ([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'country' => 'required',
                'state' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'date' => 'required',

            ]);
        
        echo "<pre>";
        $data = $request->all();
        print_r($data);
        echo "</pre>";

        $customer = new customer();
        $customer->name = $request['name'];   
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['date'];
        $customer->save();

        return redirect('/customer');
    }
    public function view(){

        // $customers = customer::all();
        $customers = customer::paginate(15);
        // echo '<pre>';
        // print_r($customers->toArray());
        // echo '</pre>';
        // die;
       
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
    public function edit($id){
        $customer = customer::find($id);
        $url = url('/customer/update/').'/'.$id;
        $title = "update customer";
        $read = 'readonly';
        $data = compact('customer', 'title','url' ,'read');
        return view('customer')->with($data);
    }

    public function update(request $request, $id){
        
        $customer = customer::find($id);
        $customer->name = $request['name'];   
        $customer->email = $request['email'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['date'];
        $customer->save();
        return redirect('/customer');

        }
        public function delete($id){
            $customer = customer::find($id)->delete();
            // $customer->delete();
            // return redirect()->back();
            return redirect('/customer');
        }


}