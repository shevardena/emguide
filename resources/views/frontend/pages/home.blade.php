@extends('frontend.layouts.default')
@seoTitle('მთავარი გვერდი')
@section('content')
    <h2 class="page-title">მისასალმებელი ტექსტი</h2>
    <div
        class="bg-[#FAFBFD] p-[80px] form-container ml-auto mr-auto mt-[100px] mb-[100px] rounded-2xl shadow-lg w-full max-w-lg">
        <h1 class="form-title">საკონტაქტი ფორმა</h1>
        <x-splade-form method="POST" action="{{ route('registrationForm.store') }}"
                       default="{registered_to_participate_in_elections: 1, registration_help: 0, want_consultation: 0, later_registration: 0, transportation_help: 1}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 contact-info">
                <x-splade-select name="country_id" choices :choices="['searchEnabled' => false ]" :options="$countries"
                                 option-label="name" option-value="id" placeholder="ქვეყანა"
                                 class="form-control col-span-1"/>
                <x-splade-select name="city_id" :choices="['searchEnabled' => false ]" option-label="name"
                                 option-value="id" choices remote-url="`/cities/${form.country_id}`" placeholder="ქალაქი"
                                 class="form-control col-span-1"/>
                <x-splade-input name="first_name" placeholder="სახელი" class="form-control col-span-1"/>
                <x-splade-input name="last_name" placeholder="გვარი" class="form-control col-span-1"/>
                <x-splade-input name="email" placeholder="ელ-ფოსტა" class="form-control col-span-1"/>
                <x-splade-input name="phone" placeholder="ტელეფონის ნომერი" class="form-control col-span-1"/>
            </div>
            <hr class="border-t-1 separator border-[#070A141A]">
            <h2 class="form-title vote-title">გთხოვთ, შეავსოთ კითხვარი</h2>
            <div class="questionnaire first">
                <div class="flex items-center mb-4 md:mb-0">
                    <div
                        class="label-count sm:hidden bg-[#3453F9] text-white w-10 h-10 flex items-center justify-center rounded-full text-center font-semibold text-lg">
                        01
                    </div>
                    <label class="block form-label">
                        გაიარეთ თუ არა რეგისტრაცია 26 ოქტომბრის არჩევნებში მონაწილეობის მიზნით?
                    </label>
                </div>
                <div class="radio-input-cointainer">
                    <div class="radio-input-item first">
                        <label class="mr-2 radio-label">კი</label>
                        <input type="radio" class="radio-input" v-model="form.registered_to_participate_in_elections" value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.registered_to_participate_in_elections" value="0">
                    </div>
                </div>
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="mt-10">
                <div class="flex items-center agremeent-container gap-[8px] mt-[24px]">
                    <input type="checkbox" class="checkbox-input" v-model="form.registration_help">
                    <span>
                       მინდა თქვენ დამარეგისტრიროთ
                    </span>
                </div>
                <div v-if="form.registration_help" class="grid grid-cols-1 mt-[10px] md:grid-cols-2 gap-4 contact-info">
                    <x-splade-input name="id_code" placeholder="პირადი ნომერი (თერთმეტნიშნა)"
                                    class="form-control col-span-1 mt-[24px]"/>
                </div>
                <div class="flex items-center agremeent-container gap-[8px] mt-[24px]">
                    <input type="checkbox" class="checkbox-input" v-model="form.want_consultation">
                    <span>
                       მინდა კონსულტაცია
                    </span>
                </div>
                <div class="flex items-center agremeent-container gap-[8px] mt-[24px] mb-[24px]">
                    <input type="checkbox" class="checkbox-input" v-model="form.later_registration">
                    <span>
                        ვაპირებ გავიარო რეგისტრაცია გარკვეული დროის შემდეგ
                    </span>
                </div>
            </div>
            <div class="questionnaire second">
                <div class="flex items-center mb-4 md:mb-0 sm:block xs:block">
                    <div
                        class="label-count sm:hidden bg-[#3453F9] text-white w-10 h-10 flex items-center justify-center rounded-full text-center font-semibold text-lg">
                        02
                    </div>
                    <label class="block form-label">
                        გესაჭიროებათ თუ არა საარჩევნო უბნამდე ტრანსპორტირებაში დახმარება?
                    </label>
                </div>
                <div class="radio-input-cointainer">
                    <div class="radio-input-item first">
                        <label class="mr-2 radio-label">კი</label>
                        <input type="radio" class="radio-input" v-model="form.transportation_help" value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.transportation_help" value="0">
                    </div>
                </div>
            </div>
            <div class="file-upload-container bg-white flex flex-col md:flex-row items-center justify-start mt-[54px]">
                <div class="file-upload-desktop">
                    <x-splade-file name="avatar[]" multiple placeholder="ატვირთვა" :show-filename="true"/>
                </div>
                <div>
                    <div class="fileupload-title">
                        ატვირთე პასპორტის ფოტო
                    </div>
                    <div class="flex items-center agremeent-container gap-[8px] mt-[24px]">
                        <input type="checkbox" class="checkbox-input" v-model="form.agreement">
                        <span>
                            თანახმა ვარ, საკუთარი პირადი  მონაცემები გამოყენებული იქნას საარჩევნო სიაში რეგისტრაციის მიზნით
                        </span>
                    </div>
                    <x-splade-errors>
                        <p v-if="errors.has('agreement')" class="text-red-600 text-sm mt-2 font-sans"
                           v-text="errors.first('agreement')"/>
                    </x-splade-errors>
                </div>
                <div class="file-upload-mobile">
                    <x-splade-file name="avatar[]" multiple placeholder="ატვირთვა" :show-filename="true"/>
                </div>
            </div>
            <div class="submit-container">
                <x-splade-submit class="submit-button mt-4" label="გაგზავნა" :spinner="true"/>
            </div>
        </x-splade-form>
    </div>
@endsection
<x-splade-script>
    document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.radio-input-item').forEach(item => {
    item.addEventListener('click', () => {
    const radioInput = item.querySelector('.radio-input');
    if (radioInput) {
    radioInput.checked = true;
    radioInput.dispatchEvent(new Event('change')); // To trigger any change event listeners
    }
    });
    });

    document.querySelectorAll('.agremeent-container').forEach(container => {
    container.addEventListener('click', (event) => {
    // Prevent the default checkbox behavior if the checkbox itself is clicked
    if (event.target.tagName.toLowerCase() === 'input') {
    return;
    }

    const checkbox = container.querySelector('.checkbox-input');
    if (checkbox) {
    checkbox.checked = !checkbox.checked;
    checkbox.dispatchEvent(new Event('change')); // To trigger any change event listeners
    }
    });
    });
    });
</x-splade-script>
