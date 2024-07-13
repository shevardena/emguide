<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class SaveFormRequest extends FormRequest
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
            'country' => 'required',
            'city' => 'required',
            'first_name' => 'required|min:2|max:255',
            'last_name' => 'required|min:2|max:255',
            'id_code' => 'required|min:2|max:255',
            'email' => 'required|email|unique:backend_users,email',
            'phone' => 'required',
            'consular_registration' => 'required|boolean',
            'voting_intention' => 'required|boolean',
            'voting_reason' => 'nullable|string|max:1000',
            'registration_help' => 'required|boolean',
            'agreement' => 'accepted',
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
            'country.required' => 'მიუთითეთ ქვეყანა',
            'city.required' => 'მიუთითეთ ქალაქი',
            'first_name.required' => 'შეავსეთ სახელის ველი',
            'first_name.min' => 'სახელის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'first_name.max' => 'სახელის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'last_name.required' => 'შეავსეთ გვარის ველი',
            'last_name.min' => 'გვარის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'last_name.max' => 'გვარის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'id_code.required' => 'შეავსეთ საიდენტიფიკაციო კოდის ველი',
            'id_code.min' => 'საიდენტიფიკაციო კოდის ველი უნდა იყოს მინიმუმ 2 სიმბოლო',
            'id_code.max' => 'საიდენტიფიკაციო კოდის ველი უნდა იყოს მაქსიმუმ 255 სიმბოლო',
            'email.required' => 'შეავსეთ ელ.ფოსტის ველი',
            'email.email' => 'ელ.ფოსტის ფორმატი არასწორია',
            'email.unique' => 'ელ.ფოსტის ველი უნდა იყოს უნიკალური',
            'phone.required' => 'შეავსეთ ტელეფონის ველი',
            'consular_registration.required' => 'გთხოვთ, მიუთითეთ თუ ხართ რეგისტრირებული საკონსულოში',
            'consular_registration.boolean' => 'საკონსულოში რეგისტრაციის ველი უნდა იყოს დიახ ან არა',
            'voting_intention.required' => 'გთხოვთ, მიუთითეთ თუ აპირებთ არჩევნებზე წასვლას',
            'voting_intention.boolean' => 'არჩევნებზე წასვლის ველი უნდა იყოს დიახ ან არა',
            'voting_reason.string' => 'მიზეზის ველი უნდა იყოს ტექსტური ფორმატი',
            'voting_reason.max' => 'მიზეზის ველი არ უნდა აღემატებოდეს 1000 სიმბოლოს',
            'registration_help.required' => 'გთხოვთ, მიუთითეთ თუ გჭირდებათ დახმარება საარჩევნო სიაში რეგისტრაციაში',
            'registration_help.boolean' => 'საარჩევნო სიაში რეგისტრაციის დახმარების ველი უნდა იყოს დიახ ან არა',
            'agreement.accepted' => 'გთხოვთ, დაადასტურეთ რომ თანახმა ხართ პირადი მონაცემების გამოყენებაზე',
        ];
    }
}
