<?php

namespace Fabrica\Http\Requests;

use Fabrica\Http\Requests\Request;

class crearUsuarioRequest extends Request
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
            'nombre'=>'required|min:2|max:70',
            'correo'=>'required|unique:usuario|email|max:50',
            'carrera'=>'required|in:Sistemas,Informatica,Electronica,
                                    Electrica,Electromecanica,Matematicas,Fisica',
            'cargo'=>'required|in:Administracion,Desarrollo,Investigacion',
            'tipo'=>'required',
            'area'=>'required',
            'path'=>'required|mimes:jpeg,jpg,png',
        ];
    }
}
