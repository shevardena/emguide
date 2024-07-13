<?php \ProtoneMedia\Splade\Facades\SEO::title('Create Registration Form'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.page-title','data' => ['heading' => 'Create registration form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Create registration form']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b)): ?>
<?php $attributes = $__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b; ?>
<?php unset($__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b)): ?>
<?php $component = $__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b; ?>
<?php unset($__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b); ?>
<?php endif; ?>
    <div class="mx-4 mt-5 h-full">
        <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => '{registered_to_participate_in_elections: 1, registration_help: 0, want_consultation: 0, later_registration: 0, transportation_help: 1}'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('registration_forms.store')).'']); ?>
            <div class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['choices' => true,'options' => $countries,'optionLabel' => 'name','optionValue' => 'id','placeholder' => 'ქვეყანა','name' => 'country_id','label' => 'Country'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['choices' => true,'optionLabel' => 'name','optionValue' => 'id','remoteUrl' => '`/cities/${form.country}`','placeholder' => 'ქალაქი','name' => 'city_id','label' => 'City'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0']); ?>
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
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'first_name','label' => 'First name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'last_name','label' => 'Last name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0']); ?>
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
            <div class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['type' => 'email','name' => 'email','label' => 'Email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['type' => 'text','name' => 'phone','label' => 'Phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0']); ?>
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
            <div class="mt-4">
                <label>Have you registered to participate in the October 26th elections?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <?php if (isset($component)) { $__componentOriginalcc147188b70b131306b1d337ed413798 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc147188b70b131306b1d337ed413798 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radio::resolve(['vModel' => 'form.registered_to_participate_in_elections','value' => '1','label' => 'Yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Radio::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $attributes = $__attributesOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__attributesOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $component = $__componentOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__componentOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalcc147188b70b131306b1d337ed413798 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc147188b70b131306b1d337ed413798 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radio::resolve(['vModel' => 'form.registered_to_participate_in_elections','value' => '0','label' => 'No'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Radio::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $attributes = $__attributesOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__attributesOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $component = $__componentOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__componentOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
                </div>
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['vModel' => 'form.registration_help','label' => 'I want you to register me'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $attributes = $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $component = $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
            </div>
            <div v-if="form.registration_help" class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'id_code','label' => 'ID Code'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
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
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['vModel' => 'form.want_consultation','label' => 'I want a consultation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $attributes = $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $component = $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
            </div>
            <div v-if="form.registered_to_participate_in_elections == 0" class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['vModel' => 'form.later_registration','label' => 'I plan to register at a later time'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 mt-4 sm:mt-0 sm:mr-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $attributes = $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $component = $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
            </div>
            <div class="mt-4">
                <label>Do you need help registering on the voter list?</label>
                <div class="flex flex-col sm:flex-row mt-4">
                    <?php if (isset($component)) { $__componentOriginalcc147188b70b131306b1d337ed413798 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc147188b70b131306b1d337ed413798 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radio::resolve(['vModel' => 'form.tranposrtation_help','value' => '1','label' => 'Yes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Radio::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $attributes = $__attributesOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__attributesOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $component = $__componentOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__componentOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalcc147188b70b131306b1d337ed413798 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc147188b70b131306b1d337ed413798 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radio::resolve(['vModel' => 'form.tranposrtation_help','value' => '0','label' => 'No'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Radio::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $attributes = $__attributesOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__attributesOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $component = $__componentOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__componentOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="mt-4 mb-2">
                <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => 'Create','spinner' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Submit::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/vote/resources/views/backend/pages/registration_form/create.blade.php ENDPATH**/ ?>