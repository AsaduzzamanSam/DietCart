<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
     
    	return view('admin.index');

    }

     public function verify(Request $request)
    {
    	

        $u = DB::table('register') 
            ->where('userName', $request->username)
            ->where('password', $request->password)
            ->where('type', '=', 'admin')
            ->first();
            

    	if(!$u)
    	{
            $request->session()->flash('message', 'Invalid Admin or password');
    		return redirect('/admin');
    	}
    	else
    	{
               
            $request->session()->put('admin', $u);
    		return redirect('/admin/home');
    		
    	}
    }

    public function adminhome(Request $request)
    {

        if(! $request->session()->has('admin')) {
        return "stop no session"; 
        }

        $value =  $request->session()->get('admin');

         // dd($value);
        return view('admin.home')
           ->with('de', $value);
     
        

    }


    public function userinfo()
    {
        $userlist = DB::table('register')
            ->where('type', '=', 'user')
            ->get();
        return view('admin.userinfo')
            ->with('userlist', $userlist);
            // echo $prolist;
    }


    public function searchuser(Request $request)
    {

        // dd($request);
        $userlist = DB::table('register')
             ->where('userName', $request->username)
            ->get();
        return view('admin.userinfo')
            ->with('userlist', $userlist);
        
    }


    public function edit($id)
    {
        $user = DB::table('register')
            ->where('id', $id)
            ->first();
        return view('admin.useredit')
            ->with('user', $user);
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

        return redirect('/userInfo');
    }


    public function delete($id)
    {
        $user = DB::table('register')
            ->where('id', $id)
            ->first();
        return view('admin.userdelete')
            ->with('user', $user);
    }

    public function destroy($id)
    {
        DB::table('register')
            ->where('id', $id)
            ->delete();

        return redirect('/userInfo');
    }

    public function orderinfo()
    {
        $order = DB::table('orderproduct')
            ->get();
        return view('admin.orderinfo')
            ->with('order', $order);
    }

    public function ordersearch(Request $request)
    {

        // dd($request);
        $order = DB::table('orderproduct')
             ->where('opUser','LIKE', "%$request->username%")
            ->get();
        return view('admin.orderinfo')
            ->with('order', $order);
            // echo $prolist;
    }




}
