<?php \ProtoneMedia\Splade\Facades\SEO::title('მთავარი გვერდი'); ?>
<?php \ProtoneMedia\Splade\Facades\SEO::keywords('ოლიმპიადა'); ?>
<?php \ProtoneMedia\Splade\Facades\SEO::description('ოლიმპიადის გულშემატკივრებისთვის შექმნილი “საქომაგო” ვებგვერდი სადაც , მომხმარებლებს შეეძლებათ ფოტო , ვიდეო, ტექსტური მასალის ატვირთვა , რეგისტრაციის გარეშე.'); ?>
<?php $__env->startSection('content'); ?>
    <div class="masonry p-4">
        <posts-component :initial-posts='<?php echo json_encode($posts, 15, 512) ?>' :initial-next-page-url='<?php echo json_encode($next_page_url, 15, 512) ?>'></posts-component>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yoshito/Projects/abashenici/resources/views/frontend/pages/home.blade.php ENDPATH**/ ?>