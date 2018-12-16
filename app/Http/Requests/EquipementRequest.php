<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipementRequest extends FormRequest
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
            'idInterne' => 'required|String|between:2,5|unique:equipements,idInterne',
            'taille' => 'required|Integer|between:0,999',
            'prixAdulte' => ['required', 'Integer', 'min:0', 'regex:/([0-9]+)|([0-9]+\.[0-9]+)/'],
            'prixEnfant' => ['required', 'Integer', 'min:0', 'regex:/([0-9]+)|([0-9]+\.[0-9]+)/'],
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
            'idInterne.unique'  => 'Cet identifiant est déjà assigné à un équipement.',
            'idInterne.required' => 'Il faut renseigner un identifiant',
            'idInterne.between' => 'La longueur de l\'identifiant doit être comprise entre 2 et 5 caractères.',
            'idInterne.string' => 'L\'identifiant nécessite au moins une lettre pour indiquer sa catégorie.',

            'taille.required' => 'Une valeur est requise ',
            'taille.integer'  => 'La valeur renseignée doit être numérique. (entière ou réelle)',
            'taille.between'  => 'La taille renseignée est incorrecte (minimum : 0, maximum : 999)',

            'prixAdulte.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'prixEnfant.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'prixAdulte.required' => 'Un prix pour adulte doit être renseigné.',

            'prixAdulte.min'      => 'Le prix pour adulte doit être supérieur ou égale à 0.',
            'prixEnfant.required' => 'Un prix pour enfant doit être renseigné.',
            'prixEnfant.min'      => 'Le prix pour enfant doit être supérieur ou égale à 0.',
        ];
    }
}
