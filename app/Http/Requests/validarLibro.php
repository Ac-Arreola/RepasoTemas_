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

                'txtIsbn'=>'required',
                'txtIsbn'=>'min:13',
                'txtIsbn'=>'numeric',
                'txtTitulo'=>'required',
                'txtAutor'=>'required',
                'txtPaginas'=>'required',
                'txtPaginas'=>'numeric',
                'txtEditorial'=>'required',
                'txtEmail' =>'required',
                'txtEmail' =>'email'

        ];
    }
}
