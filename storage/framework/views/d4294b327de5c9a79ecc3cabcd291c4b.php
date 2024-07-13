<div class="form-content" v-show="data.activeForm === 'file'">
    <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'post','action' => '/posts']); ?>
        <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'type'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => 'form.type','class' => 'hidden']); ?>
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
        <div id="fileInputContainer" class="file-input-container border-dashed border-2 border-gray-400 p-4 text-center rounded cursor-pointer">
            <?php if (isset($component)) { $__componentOriginal4cd41e82379e83253fe439725f650e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cd41e82379e83253fe439725f650e27 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\File::resolve(['name' => 'file'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\File::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'fileInput','class' => 'file-input hidden']); ?>
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
            <div class="pointer-events-none z-0">
                <img src="<?php echo e(asset('images/file-icon-2.png')); ?>" alt="File Icon" class="mx-auto">
                <p class="type-title">ფოტო / ვიდეო</p>
                <p class="type-info">მაქსიმუმ 25 მბ</p>
            </div>
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
            <p class="text-red-600 text-sm mt-2 font-sans" v-if="errors.has('file')" v-text="errors.first('file')" />
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
        <div v-if="form.file" class="file-preview relative">
            <img v-if="form.file" :src="form.$fileAsUrl('file')" alt="File" class="mx-auto" />
            <button class="mt-2 mr-2 p-2 rounded-md flex justify-between items-center text-white bg-red-400 absolute top-2 right-2" @click="form.file = false">
                <i class="fa-solid fa-xmark mr-2"></i>
                წაშლა
            </button>
        </div>
        <custom-wysiwyg v-model="data.richEditorContent" />
        <?php if (isset($component)) { $__componentOriginal8a09b4fbcafa220e62e8b6be607afce2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Textarea::resolve(['name' => 'description','vModel' => 'form.description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hidden-description','autosize' => true]); ?>
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
        <div class="mb-[20px]">
            <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'tags','placeholder' => 'დაამატე ტეგი','options' => $tags,'optionLabel' => 'title','optionValue' => 'id','choices' => true,'multiple' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'tags-selector']); ?>
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
        <div class="mb-[20px]">
            <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'sport_type_id','placeholder' => 'სპორტის სახეობა','options' => $sporttypes,'optionLabel' => 'title','optionValue' => 'id','choices' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'tags-selector']); ?>
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
        <div class="mb-[20px]">
            <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'athlete_id','placeholder' => 'სპორტსმენი','options' => $athletes,'optionLabel' => 'first_name','optionValue' => 'id','choices' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'tags-selector']); ?>
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
        <?php
            $position = $button == 'center' ? 'justify-center' : 'justify-end';
        ?>
        <div class="flex <?php echo e($position); ?>">
            <button class="add-post" type="submit" @click="form.$put('description', data.richEditorContent), form.$put('background', data.selectedColor), form.$put('type', data.activeForm), form.submit">დაამატე</button>
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
    document.getElementById('fileInputContainer').addEventListener('click', function() {
        document.getElementById('fileInput').click();
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
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/components/file-post-form.blade.php ENDPATH**/ ?>