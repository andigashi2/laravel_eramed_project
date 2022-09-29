<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'type_of_device' => 'required',
            'measurement_limits' => 'required',
            'manufacturer' => 'required',
            'serial_number' => 'required',
            'current_location' => 'required',
            'person_in_charge' => 'required',
            'instrument_description' => 'required',
            'manufacturer_details' => 'required',
            'manufacturer_instructions' => 'required',
            'maintenance_plan' => 'required',
            'equipment_status' => 'required',
            'eramed_laboratory_identification_code' => 'required',
            'laboratory_id' => 'required|exists:laboratory,id'
        ];
    }
}
