<?php if (isset($component)) { $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Modal::resolve(['closeExplicitly' => true,'closeButton' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'post']); ?>
    <button class="modal-close" @click="modal.close()">
        <img src="<?php echo e(asset('images/close.svg')); ?>" alt="close">
    </button>
    <?php if($post->type === 'text'): ?>
        <div class="background" style="background: <?php echo e($post->background); ?>">
            <?php echo $post->description; ?>

        </div>
    <?php else: ?>
    <?php endif; ?>
    <div class="bottom-content">
        <div class="tags">
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tag"><?php echo e($tag->title); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $attributes = $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $component = $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/frontend/pages/post/view.blade.php ENDPATH**/ ?>