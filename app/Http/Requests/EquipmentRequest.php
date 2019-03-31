<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Equipment;

class EquipmentRequest extends FormRequest
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
        if (Equipment::findOrFail($this->id)->internalId === $this->internalId) {
            return [
                'size' => 'required|Integer|between:0,999',
            ];
        }

        return [
            'internalId' => 'required|String|between:2,5|unique:equipments,internalId',
            'size' => 'required|Integer|between:0,999',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'internalId.unique' => 'Cet identifiant est déjà assigné à un équipement.',
            'internalId.required' => 'Il faut renseigner un identifiant',
            'internalId.between' => 'La longueur de l\'identifiant doit être comprise entre 2 et 5 caractères.',
            'internalId.string' => 'L\'identifiant nécessite au moins une lettre pour indiquer sa catégorie.',

            'size.required' => 'Une valeur est requise ',
            'size.integer' => 'La valeur renseignée doit être numérique. (entière ou réelle)',
            'size.between' => 'La size renseignée est incorrecte (minimum : 0, maximum : 999)',
        ];
    }
}
