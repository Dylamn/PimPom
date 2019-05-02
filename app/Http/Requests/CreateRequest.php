<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'surname' => 'required',
            'firstname' => 'required',
            'privilege' => 'required|between:0,1',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users,username',
            'password' => 'required|String|between:5,50|confirmed',

            'label' => 'required|String|unique:categories,label',
            'adultPrice' => 'required|min:0',
            'childrenPrice' => 'required|min:0',

            'internalId' => 'required|String|between:3,8|unique:equipments',
            'size' => 'required|Integer|between:0,999',
            'statusId' => 'required|Integer|between:1,3',
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

            'surname.required' => 'Ce nom est déjà incorrect.',

            'firstname.required' => 'Ce prénom est déjà incorrect.',

            'privilege.required' => 'Ce privilège est déjà incorrect',
            'privilege.between' => 'Le privilège doit être compris entre 0 et 1 caractères.',

            'username.required' => 'Ce nom d\'utilisateur est incorrect.',
            'username.unique' => 'Ce nom d\'utilisateur est déjà utilisé.',

            'password.required' => 'Le mot de passe est incorrect.',
            'password.between' => 'Le mot de passe doit être compris entre 5 et 50 caractères.',
            'password.confirmed' => 'Le mot de passe est différent de celui de la confirmation.',

            'label.required' => 'Il faut renseigner un nom de catégorie.',
            'label.string' => 'Le nom de catégorie doit être renseigner en lettre.',

            'adultPrice.required' => 'Un prix pour adulte doit être renseigné.',
            'adultPrice.min' => 'Le prix pour adulte doit être supérieur ou égale à 0.',

            'childrenPrice.required' => 'Un prix pour enfant doit être renseigné.',
            'childrenPrice.min' => 'Le prix pour enfant doit être supérieur ou égale à 0.',

            'internalId.unique' => 'Cet identifiant est déjà assigné à un équipement.',
            'internalId.required' => 'Il faut renseigner un identifiant.',
            'internalId.between' => 'La longueur de l\'identifiant doit être comprise entre 2 et 5 caractères.',
            'internalId.string' => 'L\'identifiant nécessite au moins une lettre pour indiquer sa catégorie.',

            'size.required' => 'Une valeur est requise.',
            'size.integer' => 'La valeur renseignée doit être numérique. (entière ou réelle).',
            'size.between' => 'La size renseignée est incorrecte (minimum : 0, maximum : 999).',

            'statusId.required' => 'Il faut renseigner un état.',
            'statusId.between' => 'La size renseignée est incorrecte (minimum : 1, maximum : 3).',
        ];
    }
}
