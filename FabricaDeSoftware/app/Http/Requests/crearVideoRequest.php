<?php

namespace Fabrica\Http\Requests;

use Fabrica\Http\Requests\Request;

class crearVideoRequest extends Request
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
            'nombre_video'=>'required',
            'url'=>'required|url',
            'galeria'=>'required',
        ];
    }
}
