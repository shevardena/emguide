<?php \ProtoneMedia\Splade\Facades\SEO::title('მთავარი გვერდი'); ?>
<?php \ProtoneMedia\Splade\Facades\SEO::keywords('ოლიმპიადა'); ?>
<?php \ProtoneMedia\Splade\Facades\SEO::description('ოლიმპიადის გულშემატკივრებისთვის შექმნილი “საქომაგო” ვებგვერდი სადაც , მომხმარებლებს შეეძლებათ ფოტო , ვიდეო, ტექსტური მასალის ატვირთვა , რეგისტრაციის გარეშე.'); ?>
<?php if (isset($component)) { $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Modal::resolve(['closeExplicitly' => true,'closeButton' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pl-[16px] pr-[16px] pt-[24px] pb-[24px] rounded-[16px] post-modal sm:w-full sm:h-full md:bg-white']); ?>
    <?php if (isset($component)) { $__componentOriginale6278a0588d6b97345ecb6e9bf149e6c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Data::resolve(['default' => '{ activeForm: null, selectedColor: \'#D72D4A\', richEditorContent: \'\' }'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Data::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex justify-between items-center">
            <div class="flex justify-center">
                <button v-show="data.activeForm" @click.prevent="data.activeForm = null" class="modal-close mr-5">
                    <img src="<?php echo e(asset('images/back.svg')); ?>" alt="back">
                </button>
                <h2 class="text-left">დაამატე პოსტი</h2>
            </div>
            <button class="modal-close" @click="modal.close()">
                <img src="<?php echo e(asset('images/close.svg')); ?>" alt="close">
            </button>
        </div>

        <div v-show="!data.activeForm" class="mt-4">
            <div class="grid grid-cols-2 gap-4">
                <!-- Card 1 -->
                <div class="post-type cursor-pointer" @click.prevent="data.activeForm = 'file'">
                    <div class="flex flex-col items-center">
                        <img src="<?php echo e(asset('images/file-icon.png')); ?>" alt="File Icon" class="post-icon">
                        <p class="type-title">ფოტო / ვიდეო</p>
                        <p class="type-info">მაქსიმუმ 25 მბ</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="post-type cursor-pointer" @click.prevent="data.activeForm = 'text'">
                    <div class="flex flex-col items-center">
                        <img src="<?php echo e(asset('images/text-icon.png')); ?>" alt="Text Icon" class="post-icon">
                        <p class="type-title">ტექსტი</p>
                        <p class="type-info">მხოლოდ ტექსტის დამატება</p>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal69b9ce94777872722826063e2ac04297 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69b9ce94777872722826063e2ac04297 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.file-post-form','data' => ['button' => 'end','tags' => $tags,'sporttypes' => $sport_types,'athletes' => $athletes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('file-post-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button' => 'end','tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags),'sporttypes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sport_types),'athletes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($athletes)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69b9ce94777872722826063e2ac04297)): ?>
<?php $attributes = $__attributesOriginal69b9ce94777872722826063e2ac04297; ?>
<?php unset($__attributesOriginal69b9ce94777872722826063e2ac04297); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69b9ce94777872722826063e2ac04297)): ?>
<?php $component = $__componentOriginal69b9ce94777872722826063e2ac04297; ?>
<?php unset($__componentOriginal69b9ce94777872722826063e2ac04297); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginale85b504731aec9bb4c17ee053fa74adf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale85b504731aec9bb4c17ee053fa74adf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-post-form','data' => ['button' => 'end','tags' => $tags,'sporttypes' => $sport_types,'athletes' => $athletes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-post-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button' => 'end','tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags),'sporttypes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sport_types),'athletes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($athletes)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale85b504731aec9bb4c17ee053fa74adf)): ?>
<?php $attributes = $__attributesOriginale85b504731aec9bb4c17ee053fa74adf; ?>
<?php unset($__attributesOriginale85b504731aec9bb4c17ee053fa74adf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale85b504731aec9bb4c17ee053fa74adf)): ?>
<?php $component = $__componentOriginale85b504731aec9bb4c17ee053fa74adf; ?>
<?php unset($__componentOriginale85b504731aec9bb4c17ee053fa74adf); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c)): ?>
<?php $attributes = $__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c; ?>
<?php unset($__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6278a0588d6b97345ecb6e9bf149e6c)): ?>
<?php $component = $__componentOriginale6278a0588d6b97345ecb6e9bf149e6c; ?>
<?php unset($__componentOriginale6278a0588d6b97345ecb6e9bf149e6c); ?>
<?php endif; ?>
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
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/frontend/pages/post/modal.blade.php ENDPATH**/ ?>