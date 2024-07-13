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
    <div class="footer">
        <div class="flex items-center links">
            <a href="">ჩვენ შესახებ</a>
            <span>|</span>
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                + 995-55-77-90
            </a>
        </div>
        <div class="flex items-center social">
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10V14H10V21H14V14H17L18 10H14V8C14 7.73478 14.1054 7.48043 14.2929 7.29289C14.4804 7.10536 14.7348 7 15 7H18V3H15C13.6739 3 12.4021 3.52678 11.4645 4.46447C10.5268 5.40215 10 6.67392 10 8V10H7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 4H8C5.79086 4 4 5.79086 4 8V16C4 18.2091 5.79086 20 8 20H16C18.2091 20 20 18.2091 20 16V8C20 5.79086 18.2091 4 16 4Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.5 7.5V7.501" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 5H7C4.79086 5 3 6.79086 3 9V15C3 17.2091 4.79086 19 7 19H17C19.2091 19 21 17.2091 21 15V9C21 6.79086 19.2091 5 17 5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 9L15 12L10 15V9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 11V16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 8V8.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 16V11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 16V13C16 12.4696 15.7893 11.9609 15.4142 11.5858C15.0391 11.2107 14.5304 11 14 11C13.4696 11 12.9609 11.2107 12.5858 11.5858C12.2107 11.9609 12 12.4696 12 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
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
