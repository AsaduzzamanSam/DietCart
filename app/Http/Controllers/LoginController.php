<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	public function index()
    {
     
    	return view('login.index');

    }
    public function verify(Request $request)
    {
    	

        $u = DB::table('register') 
            ->where('userName', $request->username)
            ->where('password', $request->password)
            ->where('type', '=', 'user')
            ->first();
            

    	if(!$u)
    	{
            $request->session()->flash('message', 'Invalid username or password');
    		return redirect('/login');
    	}
    	else
    	{
               
         $request->session()->put('register', $u);
         
    		return redirect('/home');
    		
    	}
    }

  

}
