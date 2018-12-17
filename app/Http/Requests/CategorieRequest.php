<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function messages()
    {
        return [
            'internalId.unique'  => 'Cet identifiant est déjà assigné à un équipement.',
            'internalId.required' => 'Il faut renseigner un identifiant',
            'internalId.between' => 'La longueur de l\'identifiant doit être comprise entre 2 et 5 caractères.',
            'internalId.string' => 'L\'identifiant nécessite au moins une lettre pour indiquer sa catégorie.',

            'size.required' => 'Une valeur est requise ',
            'size.integer'  => 'La valeur renseignée doit être numérique. (entière ou réelle)',
            'size.between'  => 'La size renseignée est incorrecte (minimum : 0, maximum : 999)',

            'adultPrice.required' => 'Un prix pour adulte doit être renseigné.',
            'adultPrice.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'adultPrice.min'      => 'Le prix pour adulte doit être supérieur ou égale à 0.',

            'childrenPrice.required' => 'Un prix pour enfant doit être renseigné.',
            'childrenPrice.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'childrenPrice.min'      => 'Le prix pour enfant doit être supérieur ou égale à 0.',
        ];
    }
}
