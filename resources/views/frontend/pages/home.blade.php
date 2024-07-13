@extends('frontend.layouts.default')
@seoTitle('მთავარი გვერდი')
@section('content')
    <h2 class="page-title">მისასალმებელი ტექსტი</h2>
    <div class="bg-[#FAFBFD] p-[80px] form-container ml-auto mr-auto mt-[100px] mb-[100px] rounded-2xl shadow-lg w-full max-w-lg">
        <h1 class="form-title">საკონტაქტი ფორმა</h1>
        <x-splade-form method="POST" action="{{ route('home.saveForm') }}" default="{voting_intention: 1, consular_registration: 0, registration_help: 1}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 contact-info">
                <x-splade-select name="country" choices :choices="['searchEnabled' => false ]" :options="$countries" option-label="name" option-value="id" placeholder="ქვეყანა" class="form-control col-span-1" />
                <x-splade-select name="city" :choices="['searchEnabled' => false ]" option-label="name" option-value="id" choices remote-url="`/cities/${form.country}`" placeholder="ქალაქი" class="form-control col-span-1" />
                <x-splade-input name="first_name" placeholder="სახელი" class="form-control col-span-1" />
                <x-splade-input name="last_name" placeholder="გვარი" class="form-control col-span-1" />
                <x-splade-input name="id_code" placeholder="საიდენტიფიკაციო კოდი ID" class="form-control col-span-1" />
                <x-splade-input name="email" placeholder="ელ-ფოსტა" class="form-control col-span-1" />
                <x-splade-input name="phone" placeholder="ტელეფონის ნომერი" class="form-control col-span-1" />
            </div>
            <hr class="border-t-1 separator border-[#070A141A]">
            <h2 class="form-title vote-title">გთხოვთ, შეავსოთ კითხვარი</h2>
            <div class="questionnaire first">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="label-count sm:hidden bg-[#3453F9] text-white w-10 h-10 flex items-center justify-center rounded-full text-center font-semibold text-lg">
                        01
                    </div>
                    <label class="block form-label">ხართ თუ არა დარეგისტრირებული საკონსულოში?</label>
                </div>
                <div class="radio-input-cointainer">
                    <div class="radio-input-item first">
                        <label class="mr-2 radio-label">კი</label>
                        <input type="radio" class="radio-input" v-model="form.consular_registration" value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.consular_registration" value="0">
                    </div>
                </div>
            </div>
            <div class="questionnaire second">
                <div class="flex items-center mb-4 md:mb-0 sm:block xs:block">
                    <div class="label-count sm:hidden bg-[#3453F9] text-white w-10 h-10 flex items-center justify-center rounded-full text-center font-semibold text-lg">
                        02
                    </div>
                    <label class="block form-label">მიდიხართ არჩევნებზე?</label>
                </div>
                <div class="radio-input-cointainer">
                    <div class="radio-input-item first">
                        <label class="mr-2 radio-label">კი</label>
                        <input type="radio" class="radio-input" v-model="form.voting_intention"  value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.voting_intention" value="0">
                    </div>
                </div>
            </div>
            <x-splade-textarea disabled="form.voting_intention == 0" name="voting_reason" placeholder="მიზეზი თუ რატომ ვერ მიდიხართ..." class="form-control textarea-input col-span-1" />
            <div class="questionnaire third">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="label-count sm:hidden bg-[#3453F9] text-white w-10 h-10 flex items-center justify-center rounded-full text-center font-semibold text-lg">
                        03
                    </div>
                    <label class="block form-label">გსურთ თუ არა დახმარება დაგარეგისტრიროთ საარჩევნო სიაში ?</label>
                </div>
                <div class="radio-input-cointainer">
                    <div class="radio-input-item first">
                        <label class="mr-2 radio-label">კი</label>
                        <input type="radio" class="radio-input" v-model="form.registration_help"  value="1">
                    </div>
                    <div class="radio-input-item">
                        <label class="mr-2 radio-label">არა</label>
                        <input type="radio" class="radio-input" v-model="form.registration_help" value="0">
                    </div>
                </div>
            </div>
            <div class="file-upload-container bg-white flex flex-col md:flex-row items-center justify-start mt-[54px]">
                <div class="file-upload-desktop">
                    <x-splade-file name="avatar[]" multiple placeholder="ატვირთვა" :show-filename="true" />
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
                        <p v-if="errors.has('agreement')" class="text-red-600 text-sm mt-2 font-sans" v-text="errors.first('agreement')" />
                    </x-splade-errors>
                </div>
                <div class="file-upload-mobile">
                    <x-splade-file name="avatar[]" multiple placeholder="ატვირთვა" :show-filename="true" />
                </div>
            </div>
            <div class="submit-container">
                <x-splade-submit class="submit-button" label="გაგზავნა" :spinner="true" />
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
    document.addEventListener('DOMContentLoaded', () => {
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
