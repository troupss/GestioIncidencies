<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveidorCreateRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'cif' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'tipus_incidencia' => 'required|string|max:255',
        ];
    }
}
