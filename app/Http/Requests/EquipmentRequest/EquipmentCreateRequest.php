<?php

namespace App\Http\Requests\EquipmentRequest;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentCreateRequest extends FormRequest
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
