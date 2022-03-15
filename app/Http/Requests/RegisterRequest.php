<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class RegisterRequest extends FormRequest
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
    #[ArrayShape(['firstname' => "string", 'lastname' => "string", 'email' => "string", 'password' => "string", 'password_confirmation' => "string"])] public function rules(): array
    {
        return [
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'email'=>'required|email|unique:users',
        ];
    }

     public function messages(): array
    {
        return [
            'firstname.required' =>"Le prénom est requis",
            'lastname.required' =>"Le nom est requis",
            'email.required' =>" Une adresse email est requise",
            'firstname.max'=>'Le prénom ne peut dépasser :max caractères',
            'lastname.max'=>'Le nom  ne peut dépasser :max caractères',
            'email.email'=>"L'adresse email doit être valide",
            'email.unique'=>"Il y'a deja un compte avec cette email"
        ];
    }

}
