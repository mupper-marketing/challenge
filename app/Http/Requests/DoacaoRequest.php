<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoacaoRequest extends FormRequest
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
            'tipo' => 'required',
            'quantidade' => 'required',
            'nomeDoador' => 'required',
            'enderecoDoador' => 'required',
            'telefoneDoador' => 'required',
        ];
    }

    public function messages(){
        return [
            'required' => "Campo :attribute obrigatorio"
        ];
    }
}
