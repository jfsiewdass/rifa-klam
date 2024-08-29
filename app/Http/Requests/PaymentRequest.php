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
            'document' => 'required',
            'phone' => 'required',
            'bank_code' => 'required',
            'amount' => 'required',
            'document' => 'required',
            'payment_type' => 'required',
            'reference_number' => 'required',
            'status_voucher_id' => 'required',
            'numbers' => 'required',
            'capture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Campo requerido'
        ];
    }
}
