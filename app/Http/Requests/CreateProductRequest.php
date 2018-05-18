<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'pname' => 'required|max:50',
        'punit' => 'required|numeric',
        'pprice' => 'required|numeric',
        'pimage' => 'required|max:500',
        // 'pcatagory' => 'required',
        // 'ptype' => 'required',
        'pquantity' => 'required|numeric',
        ];
    }


    // public function messages(){
    //     return [
    //     'firstname.required'=> '**First Name is also required for complete this signup**',

    //     'lastname.required'=> '**Last Name is also required for complete this signup**',

    //     'email.required'=> '**Email is also required for complete this signup**',
    //     'email.email'=> '**Should be a Valid Email **',

    //     'username.required'=> '**User Name is also required for complete this signup**',
    //     'username.unique'=> '**user Name should be unique**',

    //     'password.required'=> '**Password is also required for complete this signup**',
    //     'password.min'=> '**minimum 3 digit is required **',

    //     'cpassword.required'=> '**Confirm Password is also required for complete this signup**',
    //     'cpassword.same'=> '**password not match **',
       
    //     ];
    // }
}
