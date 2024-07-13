<div class="m-4">
    <div class="flow-root">
        <h2 class="float-left text-2xl font-extrabold dark:text-white">
            <?php echo e($heading); ?>

        </h2>
        <?php if(isset($can)): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($can)): ?>
                <?php if($url): ?>
                    <Link href="<?php echo e($url); ?>"
                       class="float-right mr-2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-plus mr-1"></i>
                        <?php echo e($title); ?>

                    </Link>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/components/backend/page-title.blade.php ENDPATH**/ ?>