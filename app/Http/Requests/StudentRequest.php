<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'nisn' => 'required',
            'nis' => 'required',
            'name' => 'required',
            'born_place' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'status' => 'required',
            'siblings' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'school' => 'required',
            'accepted_date' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'father_jobs' => 'required',
            'mother_jobs' => 'required',
            'room_id' => 'required',
        ];
    }
}
