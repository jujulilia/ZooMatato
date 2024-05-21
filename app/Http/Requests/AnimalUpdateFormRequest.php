<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalUpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'max:255',
            'idade' => 'integer',
            'especie' => 'max:255',
            'ra' => 'max:255|unique:animals,ra,'. $this->id,
            'peso' => 'numeric',
            'altura' => 'numeric',
            'sexo' => 'max:255',
            'dieta' => 'max:255',
            'habitat' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.max' => 'O campo nome deve conter no máximo 255 caracteres',
            'idade.integer' => 'O campo idade deve ser um número inteiro',
            'especie.max' => 'O campo especie deve conter no máximo 255 caracteres',
            'ra.max' => 'O campo RA deve conter no máximo 255 caracteres',
            'ra.unique' => 'O campo RA deve ser único',
            'peso.numeric' => 'O campo peso deve ser um número',
            'altura.numeric' => 'O campo altura deve ser um número',
            'sexo.max' => 'O campo sexo deve conter no máximo 255 caracteres',
            'dieta.max' => 'O campo dieta deve conter no máximo 255 caracteres',
            'habitat.max' => 'O campo habitat deve conter no máximo 255 caracteres',
        ];
    }
}