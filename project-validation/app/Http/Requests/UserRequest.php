<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required | email',
            'userage' => 'required | numeric | min:18 | max:60 | between:18,60',
            'usercity' => 'required',
            'userpass' => 'required | alpha_num | min:6'
        ];
    }
    // public function messages(){
    //     return [
    //         "username.required" => 'You Should Enter Name!',
    //         "useremail.required" => 'You Should Enter User mail ID!',
    //         "userage.required" => 'You Should Enter Age!',
    //         "usercity.required" => 'You Should Enter City!',
    //         "userpass.required" => 'You Should Enter Password!',
    //         "useremail.email" => 'Invalid Email Address!',
    //         "userage.numeric" => 'Age should be numeric!',
    //         "userage.between" => 'Age should be between 18 and 60!'

    //     ];
    // }

    public function attributes() //Change attributes names only but message show laravel defaults
    {
        return [
            'username' => 'User Name',
            'useremail' => 'User Email',
            'userage' => 'Umaar',
            'usercity' => 'Patta Bol Patta',
            'userpass' => 'Passord Dal re baba'
        ];
    }
}
