<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        //return dd(substr($_SERVER['REQUEST_URI'], 14));
        if ($this->password === null && $this->newPassword === null)
        {
            return [
                'email' => 'unique:users,email,'.substr($_SERVER["REQUEST_URI"], 14),
            ];
        }
        return [
            'email' => 'unique:users,email_address',
            'surname' => 'unique:users,surname',
            'password' => 'required|String|between:5,50|same:rePassword',
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
            'email.unique' => 'Cet email est déjà utilisé',
            'surname.unique' => 'Ce nom d\'utilisateur est déjà utilisé',

            'password.required' => 'Le mot de passe est incorrect.',
            'password.between' => 'Le mot de passe doit être compris entre 5 et 50 caractères.',
            'password.same' => 'Le mot de passe est différent de la confirmation.',
        ];
    }
}
