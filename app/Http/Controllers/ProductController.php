<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
  public function index()
    {
    	$prolist = DB::table('product')
    		->get();
    	return view('product.index')
    		->with('prolist', $prolist);
    		// echo $prolist;
    }


    public function search(Request $request)
    {

        // dd($request);
        $prolist = DB::table('product')
             ->where('productType','LIKE', "%$request->ptype%")
            ->get();
        return view('product.index')
            ->with('prolist', $prolist);
            // echo $prolist;
    }

    public function create()
    {
    	return view('product.create');
    }

    public function store(Request $request)
    {
    	$params = [
    		'productName' => $request->pname,
    		'productUnit' => $request->punit,
    		'productPrice' => $request->pprice,
    		'productDescription' => $request->pdescription,
    		'productImage' => $request->pimage,
    		'productCatagory' => $request->pcatagory,
            'productType' => $request->ptype,
    		'productQuantity' => $request->pquantity
    	];

    	DB::table('product')
    		->insert($params);
    	return redirect('/product/create');
    }


    public function edit($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.edit')
            ->with('pro', $pro);
    }

    public function update(Request $request)
    {
        $params = [
            'productName' => $request->pname,
            'productUnit' => $request->punit,
            'productPrice' => $request->pprice,
            'productDescription' => $request->pdescription,
            // 'productImage' => $request->pimage,
            'productCatagory' => $request->pcatagory,
            'productType' => $request->ptype
        ];

        DB::table('product')
            ->where('productId', $request->pid)
            ->update($params);

        return redirect('/product');
    }


     public function img($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.image')
            ->with('pro', $pro);
    }

    public function imgupdate(Request $request)
    {
        $params = [
            
            'productImage' => $request->pimage,
            
        ];

        DB::table('product')
            ->where('productId', $request->pid)
            ->update($params);

        return redirect('/product');
    }


    public function delete($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.delete')
            ->with('pro', $pro);
    }

    public function destroy($id)
    {
        DB::table('product')
            ->where('productId', $id)
            ->delete();

        return redirect('/product');
    }



    public function normal()
    {
    	$type = "normalWeight";
    	$normal = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.normal')
    		->with('normal', $normal);



    }


    public function under()
    {
    	$type = "underWeight";
    	$under = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.under')
    		->with('under', $under);
    }


    public function over()
    {
    	$type = "overWeight";
    	$over = DB::table('product')
    		->where('productType', $type)
    		->get();

    	return view('product.over')
    		->with('over', $over);

            // return($over);
    }



 
    




    // public function addcart(Request $request){
        
        
    

    //     $demo = [
    //         'hidden_name' => $request->hidden_name,
    //         'hidden_price' => $request->hidden_price,
    //         'quantity' => $request->quantity,
            
    //     ];
        
    //     $value = $request->session()->get('add', $demo);
        
    //      return view('product.demo')
    //        ->with('de', $value);
       
        
    // }


    public function addcart(Request $request){

        // $hidden_id = $request->hidden_id;
        // dd($hidden_id);
        // // dd($request);


        
        // if ($request->session()->has('add')) {

        //     $count = count($request->session()->has('add'));

           
        // }




    

        $demo = [
            'hidden_name' => $request->hidden_name,
            'hidden_price' => $request->hidden_price,
            'quantity' => $request->quantity,
            'hidden_id' => $request->hidden_id,
            
        ];
        //dd($request->hidden_id);

        if(Session::has('add')){
            foreach (Session::get('add') as $value => $key) {
                if ($key['hidden_id']== $request->hidden_id){
                     
                    return redirect('/under');
                    //return back();
                }
                else
                {
                    $request->session()->push('add', $demo);
                    return back();
                }
            }
        }
        else
        {
             $request->session()->push('add', $demo);
            return back();   
        }
        
         


        
          

          // return redirect('/under');
         
       
        
    }

    public function showcart(Request $request){
       
       if(! $request->session()->has('add')) {
        return "no items in cart"; 
        }
         $value =  $request->session()->get('add');

         // dd($value);
         return view('product.demo')
           ->with('cart', $value);

         // return($value);
    }



    public function addorder(Request $request){
      $request->session()->forget('add');

        // if ($request->session()->has('add')) {
        //     $data = $request->session()->get('add');

        //     foreach ($data as $key => $value) {
        //         # code...
        //     }

        //     DB::table('orderproduct')
        //     ->insert($params);

            return redirect('/home');
        // }    

    }

    //  public function remove(Request $request){

    //     if(! $request->session()->has('add')) {
    //     return "no items in cart"; 
    //     }
    // // dd($request);
    // // dd($request->catchid);

    //     $data = $request->session()->get('add');

    //      // dd($value);

    //     foreach ($data as $key => $value) {

    //      // dd($value['hidden_id']);
    //         // dd($request->catchid);
    //      dd($value);
            
            
    //         if ($value['hidden_id'] == $request->catchid ) {
 
               
    //              $request->session()->pull('add',$key);
              

    //         }

    //         else{
                
    //         }
            
           
              
            
    //     }

    //       return back();


    //  }


     public function remove(Request $request){

        //dd($request->catchid);
       //$value =  $request->session()->get('add');
       // dd($request);
        $value =  $request->session()->get('add');
        //dd($request->catchid);
        //dd($value);

    //     if(! $request->session()->has('add')) {
    //     return "no items in cart"; 
    //     }
    // // dd($request);
    // // dd($request->catchid);

    //     $val = $request->session()->get('add');

    //      // dd($val);

    Session::has('add');

        // foreach ($value as $key) {
        //     //dd($key);
        //      //dd($key['hidden_id']);
        //     // dd($request->hidden_id);
        //     // dd($value['hidden_id']);
        //     // return $key['hidden_id'];
        //      if ($key['hidden_id']== $request->catchid ) {
        //         //dd($request->session()->pop('add',$key));
        //         //$request->session()->forget('key');
        //         //session()->forget('add');
        //        // Session::pull('add', $key);
        //        dd(Session::pull('add.'.$key));
               
        //         //unset($value[$key]);
        //       }
        // }
        if(Session::has('add')){
            foreach (Session::get('add') as $value => $key) {
                if ($key['hidden_id']== $request->catchid ){
                    Session::pull('add.'.$value); // retrieving pen and removing
                    // return redirect('/under');
                    return back();
                }
            }
        }



     }
}
