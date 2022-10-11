<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class InmutationRequest extends FormRequest
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
            'reference' => 'required|max:255',
            'entry' => 'required',
            'nisn' => 'required',
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'school' => 'required',
            'category' => 'required',
            'address' => 'required',
        ];
    }
}
