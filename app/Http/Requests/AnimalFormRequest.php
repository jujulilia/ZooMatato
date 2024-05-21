<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AnimalFormRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'idade' => 'required|integer',
            'especie' => 'required|max:255',
            'ra' => 'required|unique:animals|max:255',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'sexo' => 'required|max:255',
            'dieta' => 'required|max:255',
            'habitat' => 'required|max:255'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()


        ]));
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
            'idade.required' => 'O campo idade é obrigatório.',
            'idade.integer' => 'O campo idade deve ser um número inteiro.',
            'especie.required' => 'O campo especie é obrigatório.',
            'especie.max' => 'O campo especie deve conter no máximo 255 caracteres.',
            'ra.required' => 'O campo RA é obrigatório.',
            'ra.unique' => 'O campo RA deve ser único.',
            'ra.max' => 'O campo RA deve conter no máximo 255 caracteres.',
            'peso.required' => 'O campo peso é obrigatório.',
            'peso.numeric' => 'O campo peso deve ser um número.',
            'altura.required' => 'O campo altura é obrigatório.',
            'altura.numeric' => 'O campo altura deve ser um número.',
            'sexo.required' => 'O campo sexo é obrigatório.',
            'sexo.max' => 'O campo sexo deve conter no máximo 255 caracteres.',
            'dieta.required' => 'O campo dieta é obrigatório.',
            'dieta.max' => 'O campo dieta deve conter no máximo 255 caracteres.',
            'habitat.required' => 'O campo habitat é obrigatório.',
            'habitat.max' => 'O campo habitat deve conter no máximo 255 caracteres.',
        ];
    }
}