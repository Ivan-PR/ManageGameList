<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocation extends FormRequest
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
    public function rules() {
        return [
            //

            'location' => 'required | max:30 | string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
    public function attributes() {
        return [
            'location' => 'Nombre del pais',
        ];
    }

    public function messages() {
        return [
            'location.max' => 'Nombre del pais excesivamente largo.',
            'image.mimes' => 'El formato de la imagen no es valido.',
            'image.max' => 'El tamaño de la imagen no es valido.',
        ];
    }
}
