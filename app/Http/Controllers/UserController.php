<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function index(Request $request)
    {
     
        if(! $request->session()->has('register')) {
        return "stop no session"; 
        }

       return view('user.index')
            ->with('user', $request->session()->get('register'));
    	
    }


    public function edit(Request $request)
    {
    	 if(! $request->session()->has('register')) {
        return "stop no session"; 
        }

       return view('user.edit')
            ->with('user', $request->session()->get('register'));
    }


    public function update(Request $request)
    {
        $params = [
            'firstName' => $request->ufname,
            'lastName' => $request->ulname,
            'email' => $request->uemail,
            'userName' => $request->uusername,
           
            'password' => $request->upassword,
            
        ];



        DB::table('register')
            ->where('id', $request->uid)
            ->update($params);



        return redirect('/logout');


    }


    public function delete(Request $request)
    {
        if(! $request->session()->has('register')) {
        return "stop no session"; 
        }

       return view('user.delete')
            ->with('user', $request->session()->get('register'));
    }

    public function destroy(Request $request)
    {
        DB::table('register')
            ->where('id', $request->uid)
            ->delete();

        return redirect('/logout');
    }

}
