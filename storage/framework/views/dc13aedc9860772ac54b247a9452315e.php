<?php \ProtoneMedia\Splade\Facades\SEO::title('მთავარი გვერდი'); ?>
<?php $__env->startSection('content'); ?>
    <h2 class="page-title">მისასალმებელი ტექსტი</h2>
    <div class="bg-[#FAFBFD] p-[80px] form-container ml-auto mr-auto mt-[100px] mb-[100px] rounded-2xl shadow-lg w-full max-w-lg">
        <h1 class="form-title">საკონტაქტი ფორმა</h1>
        <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => '{voting_intention: 1, consular_registration: 0, registration_help: 1}'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'POST','action' => ''.e(route('home.saveForm')).'']); ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 contact-info">
                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'country','choices' => ['searchEnabled' => false ],'options' => $countries,'optionLabel' => 'name','optionValue' => 'id','placeholder' => 'ქვეყანა'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $attributes = $__attributesOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__attributesOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $component = $__componentOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__componentOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'city','choices' => true,'optionLabel' => 'name','optionValue' => 'id','remoteUrl' => '`/cities/${form.country}`','placeholder' => 'ქალაქი'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $attributes = $__attributesOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__attributesOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $component = $__componentOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__componentOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'first_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'სახელი','class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'last_name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'გვარი','class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'id_code'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'საიდენტიფიკაციო კოდი ID','class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'ელ-ფოსტა','class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'ტელეფონის ნომერი','class' => 'form-control col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
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
            <?php if (isset($component)) { $__componentOriginal8a09b4fbcafa220e62e8b6be607afce2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Textarea::resolve(['name' => 'voting_reason'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => 'form.voting_intention == 0','placeholder' => 'მიზეზი თუ რატომ ვერ მიდიხართ...','class' => 'form-control textarea-input col-span-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2)): ?>
<?php $attributes = $__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2; ?>
<?php unset($__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a09b4fbcafa220e62e8b6be607afce2)): ?>
<?php $component = $__componentOriginal8a09b4fbcafa220e62e8b6be607afce2; ?>
<?php unset($__componentOriginal8a09b4fbcafa220e62e8b6be607afce2); ?>
<?php endif; ?>
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
                    <?php if (isset($component)) { $__componentOriginal4cd41e82379e83253fe439725f650e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cd41e82379e83253fe439725f650e27 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\File::resolve(['name' => 'avatar[]','multiple' => true,'placeholder' => 'ატვირთვა','showFilename' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\File::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $attributes = $__attributesOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__attributesOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $component = $__componentOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__componentOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
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
                    <?php if (isset($component)) { $__componentOriginalfe8226cb659a7e2982b96ab926f35445 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe8226cb659a7e2982b96ab926f35445 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Errors::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Errors::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <p v-if="errors.has('agreement')" class="text-red-600 text-sm mt-2 font-sans" v-text="errors.first('agreement')" />
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe8226cb659a7e2982b96ab926f35445)): ?>
<?php $attributes = $__attributesOriginalfe8226cb659a7e2982b96ab926f35445; ?>
<?php unset($__attributesOriginalfe8226cb659a7e2982b96ab926f35445); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe8226cb659a7e2982b96ab926f35445)): ?>
<?php $component = $__componentOriginalfe8226cb659a7e2982b96ab926f35445; ?>
<?php unset($__componentOriginalfe8226cb659a7e2982b96ab926f35445); ?>
<?php endif; ?>
                </div>
                <div class="file-upload-mobile">
                    <?php if (isset($component)) { $__componentOriginal4cd41e82379e83253fe439725f650e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cd41e82379e83253fe439725f650e27 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\File::resolve(['name' => 'avatar[]','multiple' => true,'placeholder' => 'ატვირთვა','showFilename' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\File::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $attributes = $__attributesOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__attributesOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $component = $__componentOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__componentOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="submit-container">
                <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => 'გაგზავნა','spinner' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Submit::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'submit-button']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $attributes = $__attributesOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $component = $__componentOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__componentOriginal2d975ce603f483bebe2dbee59a477e99); ?>
<?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $attributes = $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $component = $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Script::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Script::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $attributes = $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $component = $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/vote/resources/views/frontend/pages/home.blade.php ENDPATH**/ ?>