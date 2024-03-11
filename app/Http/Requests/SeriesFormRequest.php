<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
{
   
    public function authorize()
    {
        return true; //todos estao autorizado a fazer
                    // um request
    }

 
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3']
        ];
    }

    public function messages() 
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de no minimo :min caracteres'
        ];
    }
}
