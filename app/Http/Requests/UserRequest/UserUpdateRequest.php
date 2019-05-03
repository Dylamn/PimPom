<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        if (isset($this->password) && isset($this->password_confirmation)) {
            return [
                'email' => 'required|unique:users,email,'.$this->id,
                'surname' => 'required|String',
                'firstname' => 'required|String',
                'privilege' => 'required|between:0,1',
                'password' => 'required|String|between:5,50|confirmed',
            ];
        } else {
            return [
                'email' => 'required|unique:users,email,'.$this->id,
                'surname' => 'required|String',
                'firstname' => 'required|String',
                'privilege' => 'required|between:0,1',
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Il faut renseigner une adresse mail.',
            'email.unique' => 'Cet email est déjà utilisé.',

            'surname.required' => 'Il faut renseigner un nom.',
            'surname.string' => 'Le nom doit être renseigner en lettre.',

            'firstname.required' => 'Il faut renseigner un  prénom.',
            'surname.string' => 'Le prénom doit être renseigner en lettre.',

            'privilege.required' => 'Un privilège doit être renseigné.',
            'privilege.between' => 'Le privilège doit être compris entre 0 et 1 caractères.',

            'password.required' => 'Il faut renseigner un mot de passe.',
            'password.between' => 'Le mot de passe doit être compris entre 5 et 50 caractères.',
            'password.confirmed' => 'Le mot de passe est différent de celui de la confirmation.',
        ];
    }
}
