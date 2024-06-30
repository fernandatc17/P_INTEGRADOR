<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaDetalleRequest extends FormRequest
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
			'producto_id' => 'required',
			'venta_id' => 'required',
			'precio' => 'required',
			'cantidad' => 'required',
        ];
    }
}
