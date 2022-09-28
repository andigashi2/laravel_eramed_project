<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalibrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cal_date' => 'required',
            'nr_cert_cal' => 'required',
            'cal_lab' => 'required',
            'cal_due_date' => 'required',
            'cal_interval' => 'required',
        ];
    }
}
