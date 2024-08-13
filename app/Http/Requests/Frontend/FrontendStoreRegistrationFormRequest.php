<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class FrontendStoreRegistrationFormRequest extends FormRequest
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
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'personal_id' => 'required|numeric|digits:11',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'citizenship' => 'required|in:საქართველო',
//            'date_of_entry' => 'required|date',
            'purpose_of_visit' => 'required|string|min:2|max:255',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required|string|min:2|max:255',
            'postal_code' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:20',

//            'registered_to_participate_in_elections' => 'required|boolean',
            'registration_help' => 'nullable|boolean',
            'consular_registration' => 'nullable|boolean',
            'later_registration' => 'nullable|boolean',
            'transportation_help' => 'required|boolean',
            'agreement' => 'accepted',
            'images' => 'required|array',
            'images.*' => 'mimes:jpeg,jpg,png',
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
            'last_name.required' => 'შეავსეთ გვარის ველი',
            'last_name.min' => 'გვარის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'last_name.max' => 'გვარის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'first_name.required' => 'შეავსეთ სახელის ველი',
            'first_name.min' => 'სახელის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'first_name.max' => 'სახელის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'personal_id.required' => 'პირადი ნომრის ველი სავალდებულოა',
            'personal_id.numeric' => 'პირადი ნომრის ველში დაშვებულია მხოლოდ ციფრების გამოყენება',
            'personal_id.size' => 'პირადი ნომერი უნდა იყოს ზუსტად 11 სიმბოლო',
            'date_of_birth.required' => 'დაბადების თარიღის მითითება აუცილებელია',
            'date_of_birth.date' => 'დაბადების თარიღის ფორმატი არასწორია',
            'gender.required' => 'სქესის მითითება აუცილებელია',
            'gender.in' => 'სქესი უნდა იყოს ქალი ან კაცი',
            'citizenship.required' => 'მიუთითეთ მოქალაქეობა',
            'citizenship.in' => 'უნდა იყოთ საქართველოს მოქალაქე',
            'date_of_entry.required' => 'მიუთითეთ ქვეყანაში პირველად შემოსვლის თარიღი',
            'date_of_entry.date' => 'ქვეყანაში პირველად შემოსვლის თარიღის ფორმატი არასწორია',
            'purpose_of_visit.required' => 'შეავსეთ ვიზიტის მიზნის ველი',
            'purpose_of_visit.string' => 'ვიზიტის მიზნის ფორმატი არასწორაი',
            'purpose_of_visit.min' => 'მინიმალური სიმბოლების რაოდენობა ვიზიტის მიზანში  არის 2',
            'purpose_of_visit.max' => 'მაქსიმალური სიმბოლების რაოდენობა ვიზიტის მიზანში  არის 255',
            'country_id.required' => 'მიუთითეთ ქვეყანა',
            'country_id.exists' => 'მიუთითეთ ვალიდური ქვეყანა',
            'city_id.required' => 'მიუთითეთ ქალაქი',
            'city_id.exists' => 'მიუთითეთ ვალიდური ქალაქი',
            'address.required' => 'შეავსეთ მისამართი ველი',
            'address.min' => 'მინიმალური სიმბოლების რაოდენობა მისამართში   არის 2',
            'address.max' => 'მაქსიმალური სიმბოლების რაოდენობა მისამართში  არის 255',
            'postal_code.required' => 'შეავსეთ საფოსტო ინდექსის ველი',
            'email.email' => 'ელ.ფოსტის ფორმატი არასწორია',
            'email.max' => 'სიმბოლოების მაქსიმალური რაოდენობაა 255',
            'phone.max' => 'ტელეფონის ველი უნდა იყოს მაქსიმუმ 20 სიმბოლო',
            'registered_to_participate_in_elections.required' => 'გთხოვთ, მიუთითეთ თუ გაიარეთ რეგისტრაცია 26 ოქტომბრის არჩევნებში მონაწილეობის მიზნით',
            'registered_to_participate_in_elections.boolean' => 'არასწორი მნიშვნელობა რეგისტრაციის ველში',
            'transportation_help.required' => 'გთხოვთ, მიუთითეთ თუ გესაჭიროებათ საარჩევნო უბნამდე ტრანსპორტირებაში დახმარება',
            'transportation_help.boolean' => 'არასწორი მნიშვნელობა ტრანსპორტირების ველში',
            'agreement.accepted' => 'გთხოვთ, დაადასტურეთ რომ თანახმა ხართ პირადი მონაცემების გამოყენებაზე',
            'images.required' => 'სურათის ატვირთვა აუცილებელია',
            'images.*.image' => 'დასაშვებია მხოლოდ სურათის ატვირთვა',
            'email.required' => 'შეავსეთ ელ.ფოსტის ველი'
        ];
    }
}
