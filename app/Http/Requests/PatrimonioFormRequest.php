<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatrimonioFormRequest extends FormRequest
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
            'fundo_id' => 'required|integer',
            'value' => 'required|numeric',
            'date' => 'required|date'
        ];
    }

    public function messages()
    {
        return[
            'fundo_id.required' => 'O campo é obrigatório.',
            'fundo_id.integer' => 'O valor inserido é inválido.',
            'value.required' => 'O campo é obrigatório',
            'value.numeric' => 'O valor inserido é inválido',
            'date.required' => 'O campo é obrigatório',
            'date.date' => 'O valor inserido é inválido'

        ];
    }
}
