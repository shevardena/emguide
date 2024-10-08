<?php \ProtoneMedia\Splade\Facades\SEO::title('Settings'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fa64b0fcaaf7eda55656601ad1cf28b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.page-title','data' => ['heading' => 'Settings','can' => 'create settings','url' => ''.e(route('settings.create')).'','title' => 'Create']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend.page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Settings','can' => 'create settings','url' => ''.e(route('settings.create')).'','title' => 'Create']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Table::resolve(['striped' => true,'for' => $settings] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php $__env->slot('spladeTableCelld229bbf31eaeebc7c88897732d8b932d', function ($setting, $key) use ($__env) { ?> 
                <div class="block w-24 h-6 rounded-sm" style="background-color: <?php echo e($post->background); ?>"></div>
             <?php }); ?>
            <?php $__env->slot('spladeTableCellebb67a4271abe715344471b0f16321f6', function ($setting, $key) use ($__env) { ?> 
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit setting')): ?>
                    <Link href="<?php echo e(route('settings.edit', $setting->id)); ?>"
                          class="rounded-md mr-2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium text-sm inline-flex items-center px-3 py-2 text-center">
                    <i class="fa-solid fa-pen-to-square mr-1"></i>
                    Edit
                    </Link>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete setting')): ?>
                    <Link confirm="You are deleting setting"
                          confirm-text="Are you sure?"
                          confirm-button="Yes"
                          cancel-button="No"
                          method="DELETE"
                          href="<?php echo e(route('settings.destroy', $setting->id)); ?>"
                          class="rounded-md text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:ring-red-200 font-medium text-sm inline-flex items-center px-3 py-2 text-center">
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

<?php echo $__env->make('backend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/abashenici/resources/views/backend/pages/setting/index.blade.php ENDPATH**/ ?>