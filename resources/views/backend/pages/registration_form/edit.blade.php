@extends('backend.layouts.default')
@seoTitle('Edit Registration Form')
@section('content')
    <x-backend.page-title heading="Edit registration form"/>
    <div class="mx-4 mt-5 h-full">
        <x-splade-form :default="$registration_form" action="{{ route('registration_forms.update', $registration_form->id) }}">
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="last_name" label="Last name" />
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0" name="first_name" label="First name" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="personal_id" label="Personal ID" />
                <x-splade-input disabled date class="w-full sm:w-1/2 mt-4 sm:mt-0" name="date_of_birth" label="Date Of Birth" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="gender" label="Gender" />
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0" name="citizenship" label="Citizenship" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="date_of_entry" label="Date of entry" />
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0" name="purpose_of_visit" label="Pirpose of visit" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-select disabled choices :options="$countries" option-label="name" option-value="id"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" placeholder="ქვეყანა" name="country_id" label="Country" />
                <x-splade-select disabled choices option-label="name" option-value="id" choices remote-url="`/cities/${form.country}`" class="w-full sm:w-1/2 mt-4 sm:mt-0" placeholder="ქალაქი" name="city_id" label="City" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" type="text" name="address" label="Address" />
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0" type="text" name="postal_code" label="Postal Code" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" type="text" name="phone" label="Phone" />
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0" type="email" name="email" label="Email" />
            </div>
            <div class="mt-4">
                <label>Have you registered to participate in the October 26th elections?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <x-splade-radio disabled name="registered_to_participate_in_elections"  class="mr-2" value="1" label="Yes" />
                    <x-splade-radio disabled name="registered_to_participate_in_elections" value="0" label="No" />
                </div>
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-radio disabled name="registration_help"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I want you to register me" />
            </div>
            <div v-if="form.registration_help" class="flex flex-col sm:flex-row mt-4">
                <x-splade-input disabled class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="id_code" label="ID Code" />
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-radio disabled name="want_consultation"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I want a consultation" />
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-radio disabled name="later_registration"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I plan to register at a later time" />
            </div>
            <div class="mt-4">
                <label>Do you need assistance with transportation to the polling station?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <x-splade-radio disabled name="transportation_help" class="mr-2" value="1" label="Yes" />
                    <x-splade-radio disabled name="transportation_help" value="0" label="No" />
                </div>
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-file  name="images[]" multiple filepond preview class="w-full sm:w-1/2 mr-8 mt-4 sm:mt-0" label="Other Images" />
            </div>
            <div class="mt-6 mb-2">
                <a class="p-3  rounded-sm text-white bg-blue-500" href="{{ route('registration_forms.index') }}">
                    Back
                </a>
            </div>
        </x-splade-form>
    </div>
@endsection
