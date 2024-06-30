<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
			'tipo_documento' => 'required|string',
			'numero_documento' => 'required|string',
			'datos' => 'required|string',
			'telefono' => 'required|string',
			'email' => 'required|string',
			'username' => 'required|string',
        ];
    }
}
