<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
    'nombre' => 'required',
    'email' => 'required|email', // alt 124 |, aqui son 2 validaciones para requerir el campo y para que sea formato email
    'mensaje'=>'required|min:5'
        ];
    }
}
