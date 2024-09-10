<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            // 'lottery_id' => 'required', 
            'day_rate_id' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'document' => 'required|numeric|digits_between:6,9',
            'phone' => 'required',
            'amount' => 'required',
            // 'document' => 'required',
            'payment_type' => 'required',
            'reference_number' => 'required|numeric|digits:6',
            'status_voucher_id' => 'required',
            'numbers' => 'required',
            'capture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Campo requerido',
            'reference_number.digits' => 'Mínimo 6 números',
            'phone.digits' => 'Mínimo 11 números',
            'document.numeric' => 'Debe ser numerico',
            'document.digits_between' => 'Mínimo 6 a 9 números ',
        ];
    }
}
