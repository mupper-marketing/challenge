<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtendimentoRequest extends FormRequest
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
            'data' => 'required',
            'pet_id' => 'required',
            'veterinario_id' => 'required',
            'observacao' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => "Campo :attribute obrigatorio"
        ];
    }

}
