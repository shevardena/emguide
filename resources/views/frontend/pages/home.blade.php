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
                <x-splade-input date name="date_of_birth" placeholder="დაბადების თარიღი" class="form-control col-span-1"/>
                <x-splade-select name="gender" choices :choices="['searchEnabled' => true ]" :options="$genders"
                                 option-label="name" option-value="id" placeholder="სქესი"
                                 class="form-control col-span-1"/>
                <x-splade-select name="citizenship" choices :choices="['searchEnabled' => true ]" :options="$citizenships"
                                 option-label="name" option-value="id" placeholder="მოქალაქეობა"
                                 class="form-control col-span-1"/>
                <x-splade-input date name="date_of_entry" placeholder="ქვეყანაში პირველად შემოსვლის თარიღი" class="form-control col-span-1"/>
                <x-splade-select name="purpose_of_visit" choices :choices="['searchEnabled' => true ]" :options="$purpose_of_visits"
                                 option-label="name" option-value="id" placeholder="ვიზიტის მიზანი"
                                 class="form-control col-span-1"/>
            </div>
            <h1 class="form-title mt-[12px]">განმცხადებლის საცხოვრებელი მისამართი.</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 contact-info">
                <x-splade-select name="country_id" choices :choices="['searchEnabled' => true ]" :options="$countries"
                                 option-label="name" option-value="id" placeholder="ქვეყანა"
                                 class="form-control col-span-1"/>
                <x-splade-select name="city_id" :choices="['searchEnabled' => true ]" option-label="name"
                                 option-value="id" choices remote-url="`/cities/${form.country_id}`"
                                 placeholder="ქალაქი"
                                 class="form-control col-span-1"/>
                <x-splade-input name="address" placeholder="მისამართი" class="form-control col-span-1"/>
                <x-splade-input name="postal_code" placeholder="საფოსტო ინდექსი" class="form-control col-span-1"/>
                <x-splade-input name="phone" placeholder="ტელეფონის ნომერი" class="form-control col-span-1"/>
                <x-splade-input name="email" placeholder="ელ-ფოსტა" class="form-control col-span-1"/>
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
                        <input type="radio" class="radio-input" v-model="form.registered_to_participate_in_elections"
                               value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.registered_to_participate_in_elections"
                               value="0">
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
                <div class="file-upload-desktop file-upload">
                    <x-splade-file name="images[]" :show-errors="false" multiple placeholder="ატვირთვა"
                                   :show-filename="true"/>
                </div>
                <div>
                    <div class="fileupload-title">
                        ატვირთე ფოტო
                    </div>
                    <div class="flex items-center agremeent-container gap-[8px] mt-[24px]">
                        <input type="checkbox" class="checkbox-input" v-model="form.agreement">
                        <Link modal class="agreement" href="{{ route('home.agreement') }}">
                            თანახმა ვარ, საკუთარი პირადი  მონაცემები გამოყენებული იქნას საარჩევნო სიაში რეგისტრაციის მიზნით
                        </Link>
                    </div>
                    <x-splade-errors>
                        <p v-if="errors.has('agreement')" class="text-red-600 text-sm mt-2 font-sans"
                           v-text="errors.first('agreement')"/>
                    </x-splade-errors>
                </div>
                <div class="file-upload-mobile file-upload">
                    <x-splade-file name="images[]" multiple placeholder="ატვირთვა" :show-filename="true"/>
                </div>
            </div>

            <x-splade-errors>
                <div v-for="(error, key) in errors" :key="key">
                    <span v-if="key.includes('images')" v-for="(errorItem, innerKey) in error" :key="innerKey">
                      <p class="text-red-600 text-sm mt-2 font-sans" v-text="errorItem"></p>
                    </span>
                </div>
            </x-splade-errors>
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
    });
    document.addEventListener('DOMContentLoaded', function() {
    const personalIdInput = document.querySelector('input[name="personal_id"]');

    personalIdInput.addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters

    if (this.value.length > 11) {
    this.value = this.value.slice(0, 11); // Restrict length to 11 digits
    }
    });
    });
</x-splade-script>
