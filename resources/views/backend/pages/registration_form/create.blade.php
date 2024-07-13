@extends('backend.layouts.default')
@seoTitle('Create Registration Form')
@section('content')
    <x-backend.page-title heading="Create registration form"/>
    <div class="mx-4 mt-5 h-full">
        <x-splade-form default="{registered_to_participate_in_elections: 1, registration_help: 0, want_consultation: 0, later_registration: 0, transportation_help: 1}" action="{{ route('registration_forms.store') }}">
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-select choices :options="$countries" option-label="name" option-value="id"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" placeholder="ქვეყანა" name="country_id" label="Country" />
                <x-splade-select choices option-label="name" option-value="id" choices remote-url="`/cities/${form.country}`" class="w-full sm:w-1/2 mt-4 sm:mt-0" placeholder="ქალაქი" name="city_id" label="City" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="first_name" label="First name" />
                <x-splade-input class="w-full sm:w-1/2 mt-4 sm:mt-0" name="last_name" label="Last name" />
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <x-splade-input class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" type="email" name="email" label="Email" />
                <x-splade-input class="w-full sm:w-1/2 mt-4 sm:mt-0" type="text" name="phone" label="Phone" />
            </div>
            <div class="mt-4">
                <label>Have you registered to participate in the October 26th elections?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <x-splade-radio v-model="form.registered_to_participate_in_elections" class="mr-2" value="1" label="Yes" />
                    <x-splade-radio v-model="form.registered_to_participate_in_elections" value="0" label="No" />
                </div>
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-checkbox v-model="form.registration_help"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I want you to register me" />
            </div>
            <div v-if="form.registration_help" class="flex flex-col sm:flex-row mt-4">
                <x-splade-input  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" name="id_code" label="ID Code" />
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-checkbox v-model="form.want_consultation"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I want a consultation" />
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <x-splade-checkbox v-model="form.later_registration"  class="w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4" label="I plan to register at a later time" />
            </div>
            <div class="mt-4">
                <label>Do you need help registering on the voter list?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <x-splade-radio v-model="form.tranposrtation_help" class="mr-2" value="1" label="Yes" />
                    <x-splade-radio v-model="form.tranposrtation_help" value="0" label="No" />
                </div>
            </div>
            <div class="mt-4 mb-2">
                <x-splade-submit label="Create" :spinner="false" />
            </div>
        </x-splade-form>
    </div>
@endsection
