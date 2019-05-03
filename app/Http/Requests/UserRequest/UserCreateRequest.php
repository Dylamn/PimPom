<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'surname' => 'required|string',
            'firstname' => 'required|string',
            'privilege' => 'required|between:0,1',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users,username',
            'password' => 'required|string|between:5,50|confirmed',
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
            'email.required' => 'Cet email est incorrect.',
            'email.unique' => 'Cet email est déjà utilisé.',

            'surname.required' => 'Il faut renseigner un nom.',
            'surname.string' => 'Le nom doit être renseigner en lettre.',

            'firstname.required' => 'Il faut renseigner un  prénom.',
            'firstname.string' => 'Le prénom doit être renseigner en lettre.',

            'privilege.required' => 'Ce privilège est incorrect.',
            'privilege.between' => 'Le privilège doit être compris entre 0 et 1 caractères.',

            'username.required' => 'Ce nom d\'utilisateur est incorrect.',
            'username.unique' => 'Ce nom d\'utilisateur est déjà utilisé.',

            'password.required' => 'Le mot de passe est incorrect.',
            'password.between' => 'Le mot de passe doit être compris entre 5 et 50 caractères.',
            'password.confirmed' => 'Le mot de passe est différent de celui de la confirmation.',
        ];
    }
}
