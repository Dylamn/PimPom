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
        $id = $this->id;
        if ($this->password === null && $this->password_confirmation === null)
        {
            return [
                'surname' => 'unique:users,surname,'.$id,
                'email' => 'unique:users,email,'.$id,
            ];
        }
        return [
            'email' => 'unique:users,email,'.$id,
            'surname' => 'unique:users,surname,'.$id,
            'password' => 'required|String|between:5,50|confirmed',
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
            'password.confirmed' => 'Le mot de passe est différent de celui de la confirmation.',
        ];
    }
}
