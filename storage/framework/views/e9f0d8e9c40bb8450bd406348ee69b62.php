<?php \ProtoneMedia\Splade\Facades\SEO::title('Registration Forms'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.page-title','data' => ['heading' => 'Registration Forms','can' => 'create registration form','url' => ''.e(route('registration_forms.create')).'','title' => 'Create']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Registration Forms','can' => 'create registration form','url' => ''.e(route('registration_forms.create')).'','title' => 'Create']); ?>
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
        <?php if (isset($component)) { $__componentOriginal9e290f7144d9abd075e5cf038a814133 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e290f7144d9abd075e5cf038a814133 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Table::resolve(['for' => $registration_forms] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php $__env->slot('spladeTableCellf7d5be66c1b07d07889469f807e77fae', function ($registration_form, $key) use ($__env) { ?> 
                <?php echo e($registration_form->registered_to_participate_in_elections ? 'Yes' : 'No'); ?>

             <?php }); ?>
            <?php $__env->slot('spladeTableCell57f4542446f37a581f8521acd121195b', function ($registration_form, $key) use ($__env) { ?> 
                <?php echo e($registration_form->registration_help ? 'Yes' : 'No'); ?>

             <?php }); ?>
            <?php $__env->slot('spladeTableCellfb640a4e1977e96520acca8fb311a272', function ($registration_form, $key) use ($__env) { ?> 
                <?php echo e($registration_form->want_consultation ? 'Yes' : 'No'); ?>

             <?php }); ?>
            <?php $__env->slot('spladeTableCell09c34d09812403effb9ad450e89308c9', function ($registration_form, $key) use ($__env) { ?> 
                <?php echo e($registration_form->later_registration ? 'Yes' : 'No'); ?>

             <?php }); ?>
            <?php $__env->slot('spladeTableCelle58f2d539b7d38a245ec3be0b05a25b0', function ($registration_form, $key) use ($__env) { ?> 
                <?php echo e($registration_form->transportation_help ? 'Yes' : 'No'); ?>

             <?php }); ?>
            <?php $__env->slot('spladeTableCellebb67a4271abe715344471b0f16321f6', function ($registration_form, $key) use ($__env) { ?> 
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update registration form')): ?>
                    <Link href="<?php echo e(route('registration_forms.edit', $registration_form->id)); ?>"
                          class="mr-2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-eye mr-1"></i>
                        View
                    </Link>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete registration form')): ?>
                    <Link confirm="You are deleting registration form"
                          confirm-text="Are you sure?"
                          confirm-button="Yes"
                          cancel-button="No"
                          method="DELETE"
                          href="<?php echo e(route('registration_forms.destroy', $registration_form->id)); ?>"
                          class="text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:ring-red-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-trash-can mr-1"></i>
                        Delete
                    </Link>
                <?php endif; ?>
             <?php }); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $attributes = $__attributesOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__attributesOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $component = $__componentOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__componentOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/vote/resources/views/backend/pages/registration_form/index.blade.php ENDPATH**/ ?>