<?php

namespace App\Http\Requests\CategoryRequest;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'label' => 'required|String|unique:categories,label,'.$this->id,
            'adultPrice' => 'required|min:0',
            'childrenPrice' => 'required|min:0',
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
            'label.required' => 'Il faut renseigner un nom de catégorie.',
            'label.string' => 'Le nom de catégorie doit être renseigner en lettre.',
            'label.unique' => 'Ce nom de catégorie est déjà utilisé.',

            'adultPrice.required' => 'Un prix pour adulte doit être renseigné.',
            'adultPrice.min' => 'Le prix pour adulte doit être supérieur ou égale à 0.',

            'childrenPrice.required' => 'Un prix pour enfant doit être renseigné.',
            'childrenPrice.min' => 'Le prix pour enfant doit être supérieur ou égale à 0.',
        ];
    }
}
