<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEventoFormRequest extends Request
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
        $rules = [
            //
            'nombre_evento' => 'required|min:5',
            'ubicacion' => 'required',
            'fecha_ini' => 'required|date_format:"d/m/Y"',
            'fecha_fin' => ' date_format:"d/m/Y"'
        ];

        return $rules;
    }
}
