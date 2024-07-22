@extends('frontend.layouts.default')
@seoTitle('მთავარი გვერდი')
@section('content')
    <div
        class="bg-[#FAFBFD] p-[80px] form-container ml-auto mr-auto mt-[100px] mb-[100px] rounded-2xl shadow-lg w-full max-w-lg">
        <x-splade-form method="POST" action="{{ route('registrationForm.store') }}"
                       default="{citizenship: 'საქართველო', registered_to_participate_in_elections: 1, registration_help: 0, want_consultation: 0, later_registration: 0, transportation_help: 1}">
            <h1 class="form-title">მიუთითეთ პერსონალური მონაცემები</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 contact-info">
                <x-splade-input name="last_name" placeholder="გვარი ქართულად" class="form-control col-span-1"/>
                <x-splade-input name="first_name" placeholder="სახელი ქართულად" class="form-control col-span-1"/>
                <x-splade-input  type="number" name="personal_id" placeholder="პირადი ნომერი (თერთმეტნიშნა)"
                                 class="form-control col-span-1"/>
            </div>
        </x-splade-form>
    </div>
@endsection
