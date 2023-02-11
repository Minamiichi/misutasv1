<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_pembayaran' => 'required|max:255',
            'name' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'category' => 'required',
            'status' => 'required',
            'sum' => 'required',

        ];
    }
}
