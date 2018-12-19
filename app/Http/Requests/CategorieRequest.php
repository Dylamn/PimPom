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
            'label' => 'required|String',
            'adultPrice' => ['required', 'Integer', 'min:0', 'regex:/([0-9]+)|([0-9]+\.[0-9]+)/'],
            'childrenPrice' => ['required', 'Integer', 'min:0', 'regex:/([0-9]+)|([0-9]+\.[0-9]+)/'],
        ];
    }

    public function messages()
    {
        return [
            'label.required' => 'Il faut renseigner un nom de catégorie',
            'label.string' => 'Le nom de catégorie doit être renseigner en lettre.',

            'adultPrice.required' => 'Un prix pour adulte doit être renseigné.',
            'adultPrice.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'adultPrice.min'      => 'Le prix pour adulte doit être supérieur ou égale à 0.',

            'childrenPrice.required' => 'Un prix pour enfant doit être renseigné.',
            'childrenPrice.integer'  => 'Le prix renseigné doit être supérieur à 0.',
            'childrenPrice.min'      => 'Le prix pour enfant doit être supérieur ou égale à 0.',
        ];
    }
}
