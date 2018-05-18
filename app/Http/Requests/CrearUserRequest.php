<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             
        'firstname' => 'required|max:50',
        'lastname' => 'required|max:50',
        'email' => 'required|email',
        'username' => 'required|unique:register,userName|max:50|alpha',
        'password' => 'required|min:3|max:50',
        'cpassword' => 'required|same:password',
        
        
        
        ];
    }

    public function messages(){
        return [
        'firstname.required'=> '**First Name is also required for complete this signup**',

        'lastname.required'=> '**Last Name is also required for complete this signup**',

        'email.required'=> '**Email is also required for complete this signup**',
        'email.email'=> '**Should be a Valid Email **',

        'username.required'=> '**User Name is also required for complete this signup**',
        'username.unique'=> '**user Name should be unique**',

        'password.required'=> '**Password is also required for complete this signup**',
        'password.min'=> '**minimum 3 digit is required **',

        'cpassword.required'=> '**Confirm Password is also required for complete this signup**',
        'cpassword.same'=> '**password not match **',
       
        ];
    }
}
