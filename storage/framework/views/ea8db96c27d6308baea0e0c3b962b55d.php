<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['baseAttributes','key','closeButton','closeExplicitly','name']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['baseAttributes','key','closeButton','closeExplicitly','name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal16143908f3a5c804770e3fa993948664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16143908f3a5c804770e3fa993948664 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\ModalWrapper::resolve(['baseAttributes' => $baseAttributes,'key' => $key,'closeButton' => $closeButton,'closeExplicitly' => $closeExplicitly,'name' => $name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-modal-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\ModalWrapper::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal16143908f3a5c804770e3fa993948664)): ?>
<?php $attributes = $__attributesOriginal16143908f3a5c804770e3fa993948664; ?>
<?php unset($__attributesOriginal16143908f3a5c804770e3fa993948664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16143908f3a5c804770e3fa993948664)): ?>
<?php $component = $__componentOriginal16143908f3a5c804770e3fa993948664; ?>
<?php unset($__componentOriginal16143908f3a5c804770e3fa993948664); ?>
<?php endif; ?><?php /**PATH /home/yoshito/Projects/abashenici/storage/framework/views/7bd860c0046fbc4d86c78ded4f34340f.blade.php ENDPATH**/ ?>