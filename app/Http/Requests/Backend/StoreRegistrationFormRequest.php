<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'registered_to_participate_in_elections' => 'required|boolean',
            'registration_help' => 'nullable|boolean',
            'id_code' => 'required_if:registration_help,1|string|size:11',
            'consular_registration' => 'nullable|boolean',
            'later_registration' => 'nullable|boolean',
            'transportation_help' => 'required|boolean',
            'agreement' => 'accepted',
        ];
    }
}
