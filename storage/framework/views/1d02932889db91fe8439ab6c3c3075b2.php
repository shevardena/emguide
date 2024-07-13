<?php \ProtoneMedia\Splade\Facades\SEO::title('Create Setting'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.page-title','data' => ['heading' => 'Settings']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Settings']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('settings.store')).'']); ?>
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
                <div v-for="(errors, key) in errors.all">
                    <p class="text-red-400" v-html="errors"></p>
                </div>
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
            <div class="flex flex-col sm:flex-row mt-4">
                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['showErrors' => false,'name' => 'type','label' => 'Type','choices' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full sm:w-1/2 sm:mr-4 mt-4 sm:mt-0']); ?>
                    <option disabled selected>Select type</option>
                    <option value="blacklisted_words">Blacklisted Words</option>
                    <option value="post_automation">Post Publish Automation</option>
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

            <div class="flex flex-col sm:flex-row mt-4" v-if="form.type === 'post_automation'">
                <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['showErrors' => false,'name' => 'post_automation','label' => 'Enable Automation'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
            <div class="mt-6 grid gap-6 mb-6 md:grid-cols-2" v-if="form.type === 'blacklisted_words'">
                <repeater-component v-model="form.blacklisted_words" :errors="errors"/>
            </div>
            <div class="mt-2 mb-2">
                <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => 'Create','spinner' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/abashenici/resources/views/backend/pages/setting/create.blade.php ENDPATH**/ ?>