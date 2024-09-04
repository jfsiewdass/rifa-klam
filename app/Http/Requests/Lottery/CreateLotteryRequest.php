<?php

namespace App\Http\Requests\Lottery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class CreateLotteryRequest extends FormRequest
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
            'name' => 'required|min:3',
            'detail' => 'required|min:3',
            'amount' => 'required',
            'qty_numbers' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function attributes()
    {
        return [
            'images.*' => 'imagen',
        ];
    }

    public function messages()
    {
        return [
            'images.*.required' => 'El campo :attribute es obligatorio.',
            '*.required' => 'Campo requerido'
        ];
    }
}
