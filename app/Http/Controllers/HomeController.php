<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CrearUserRequest;

class HomeController extends Controller
{
   public function index()
    {
        $users = DB::table('register')->get();
        return view('home.index', ['users' => $users]);
    }


    public function create()
    {
    	return view('home.create');
    }

     public function store(CrearUserRequest $request)
    {



    	$params = [
    		'firstName' => $request->firstname,
    		'lastName' => $request->lastname,
    		'email' => $request->email,
    		'userName' => $request->username,
    		'password' => $request->password,
            'type' => $request->type
    	];

    	DB::table('register')
    		->insert($params);
    	return redirect('/');
    }

 }
