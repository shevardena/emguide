<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use ProtoneMedia\Splade\FileUploads\HasSpladeFileUploads;

class FrontendStoreRegistrationFormRequest extends FormRequest implements HasSpladeFileUploads
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
            'images' => 'required|array',
            'images.*' => 'image',
            'images_order' => 'nullable|boolean'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'country_id.required' => 'მიუთითეთ ქვეყანა',
            'country_id.exists' => 'მიუთითეთ ვალიდური ქვეყანა',
            'city_id.required' => 'მიუთითეთ ქალაქი',
            'city_id.exists' => 'მიუთითეთ ვალიდური ქალაქი',
            'first_name.required' => 'შეავსეთ სახელის ველი',
            'first_name.min' => 'სახელის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'first_name.max' => 'სახელის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'last_name.required' => 'შეავსეთ გვარის ველი',
            'last_name.min' => 'გვარის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'last_name.max' => 'გვარის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'email.email' => 'ელ.ფოსტის ფორმატი არასწორია',
            'phone.required' => 'შეავსეთ ტელეფონის ველი',
            'phone.max' => 'ტელეფონის ველი უნდა იყოს მაქსიმუმ 20 სიმბოლო',
            'registered_to_participate_in_elections.required' => 'გთხოვთ, მიუთითეთ თუ გაიარეთ რეგისტრაცია 26 ოქტომბრის არჩევნებში მონაწილეობის მიზნით',
            'registered_to_participate_in_elections.boolean' => 'არასწორი მნიშვნელობა რეგისტრაციის ველში',
            'id_code.required_if' => 'პირადი ნომრის ველი სავალდებულოა თუ გსურთ რეგისტრაციის დახმარება',
            'id_code.size' => 'პირადი ნომერი უნდა იყოს ზუსტად 11 სიმბოლო',
            'transportation_help.required' => 'გთხოვთ, მიუთითეთ თუ გესაჭიროებათ საარჩევნო უბნამდე ტრანსპორტირებაში დახმარება',
            'transportation_help.boolean' => 'არასწორი მნიშვნელობა ტრანსპორტირების ველში',
            'agreement.accepted' => 'გთხოვთ, დაადასტურეთ რომ თანახმა ხართ პირადი მონაცემების გამოყენებაზე',
            'images.required' => 'სურათის ატვირთვა აუცილებელია',
            'images.*.image' => 'დასაშვებია მხოლოდ სურათის ატვირთვა'
        ];
    }
}
