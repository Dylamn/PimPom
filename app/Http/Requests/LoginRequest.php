<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        // |exists:utilisateurs,email
        return [
            'email' => 'required|String|email',
            'password' => 'required|String|between:5,50',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'L\'email est incorrecte.',
            'email.required' => 'Un email est requis.',
            'email.exists' => 'L\'email renseigné est incorrect.',

            'password.required' => 'Le mot de passe est incorrect.',
            'password.between' => 'Le mot de doit être compris entre 5 et 50 caractères.',
        ];
    }
}
