<header class="lg:p-4 md:p-4">
    <!-- Mobile view -->
    <div class="block md:hidden">
        <div class="w-full">
            <button class="hashtag-counter w-full bg-blue-500 text-white flex flex-col items-center justify-between max-w-md">
                <div class="flex items-start w-full justify-center">
                    <img class="animate-spin mr-[8px]" src="<?php echo e(asset('images/hashtag.svg')); ?>" alt="">
                    <div class="logo">აბაშენიცი</div>
                </div>
                <div class="flex items-end w-full justify-center">
                    <uppercase-text class="uploaded mr-2" :text="'აიტვირთა'"></uppercase-text>
                    <div class="counter mr-2">2,503,205</div>
                    <uppercase-text class="encouragement" :text="'გამხნევება'"></uppercase-text>
                </div>
            </button>
        </div>
        <div class="flex justify-between items-center logo-container">
            <img src="<?php echo e(asset('images/logo-sm.png')); ?>" alt="Logo">
            <mobile-filter
                :sport-types='<?php echo json_encode($sport_types, 15, 512) ?>'
                :athletes='<?php echo json_encode($athletes, 15, 512) ?>'
                filter-icon="<?php echo e(asset('images/filters.svg')); ?>"
                sport-icon="<?php echo e(asset('images/sport_icon.png')); ?>"
                athlete-icon="<?php echo e(asset('images/athlete_icon.png')); ?>"
            ></mobile-filter>
        </div>
    </div>

    <!-- Desktop view -->
    <div class="hidden md:flex flex-wrap justify-between items-center space-x-4">
        <div class="flex items-center space-x-4 flex-grow min-w-0 filter-container">
            <img class="mr-8" src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
            <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\ProtoneMedia\Splade\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('posts.store')).'','method' => 'POST','class' => 'flex space-x-4 items-center flex-grow min-w-0']); ?>
                <dropdown-select
                    :items='<?php echo json_encode($sport_types, 15, 512) ?>'
                    name="sport_types[]"
                    icon="<?php echo e(asset('images/sport_icon.png')); ?>"
                    item-label="title"
                    placeholder="სპორტის სახეობა"
                    item-type="sport_type"
                ></dropdown-select>
                <dropdown-select
                    :items='<?php echo json_encode($athletes, 15, 512) ?>'
                    name="athletes[]"
                    icon="<?php echo e(asset('images/athlete_icon.png')); ?>"
                    item-label="full_name"
                    :combine-fields="['first_name', 'last_name']"
                    placeholder="სპორტსმენი"
                    item-type="athlete"
                ></dropdown-select>
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
        <div class="flex-shrink-0 count-button-container">
            <button class="hashtag-counter border border-blue-500 bg-wyk-blue px-4 py-2 rounded-full text-white flex items-center">
                <img class="animate-spin mr-[8px]" src="<?php echo e(asset('images/hashtag.svg')); ?>" alt="">
                <div class="logo mr-[32px]">აბაშენიცი</div>
                <div class="uploaded mr-[8px]">ატვირთულია</div>
                <div class="counter mr-[8px]">2,503,205</div>
                <div class="encouragement">გამხნევება</div>
            </button>
        </div>
    </div>
</header>
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/frontend/partials/header.blade.php ENDPATH**/ ?>