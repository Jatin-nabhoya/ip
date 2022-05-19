<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = new customer();
        $url = url('user.store');
        return view('customer', compact('user','url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate
            ([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'country' => 'required',
                'state' => 'required',
                'address' => 'required',
            ]);
        $data = $request->all();
        $user = new customer(); 
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = md5($data['password']);
        $user->country = $data['country'];
        $user->state = $data['state'];
        $user->address = $data['address'];
        $user->save();
        return redirect('/customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = customer::find($id);
        $url = url('user.update');
        return view('customer', compact('user','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = customer::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->country = $request->country;
        $user->state = $request->state;
        $user->address = $request->address;
        $user->save();
        return redirect('/customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = customer::find($id)->delete();
        return redirect('customer');
    }
}
