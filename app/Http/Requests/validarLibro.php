<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

                'txtIsbn'=>'numeric | required|min:13',
                'txtTitulo'=>'required| max:600',
                'txtAutor'=>'required| max:50',
                'txtPaginas'=> 'required | numeric',
                'txtEditorial'=>'required',
                'txtEmail' => 'required|email'

        ];
    }
}
