<aside id="sidebar"
       :class="{'hidden': !isSidebarHidden, 'fixed': true, 'z-20': true, 'h-full': true, 'top-0': true, 'left-0': true, 'pt-16': true, 'flex': true, 'lg:flex': true, 'flex-shrink-0': true, 'flex-col': true, 'w-64': true, 'transition-width': true, 'duration-75': true}"
       aria-label="Sidebar">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">
                <ul class="space-y-2 pb-2">
                    <li>
                        <Link href="/backend/dashboard"
                              class="<?php echo e(request()->is('backend/dashboard') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base font-normal rounded-md flex items-center p-2 hover:text-white hover:bg-cyan-700 group">
                        <i class="fa-solid fa-pager hover:text-gray-900"></i>
                        <span class="ml-3">Dashboard</span>
                        </Link>
                    </li>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view posts')): ?>
                        <li>
                            <Link href="/backend/posts"
                                  class="<?php echo e(request()->is('backend/posts*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base font-normal rounded-md flex items-center p-2 hover:text-white hover:bg-cyan-700 group">
                            <i class="fa-solid fa-list-alt hover:text-gray-900"></i>
                            <span class="ml-3">Posts</span>
                            </Link>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view sport types')): ?>
                        <li>
                            <Link href="/backend/sport_types"
                                  class="<?php echo e(request()->is('backend/sport_types*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base font-normal rounded-md flex items-center p-2 hover:text-white hover:bg-cyan-700 group">
                            <i class="fa-solid fa-person-skiing hover:text-gray-900"></i>
                            <span class="ml-3">Sport Types</span>
                            </Link>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view athletes')): ?>
                        <li>
                            <Link href="/backend/athletes"
                                  class="<?php echo e(request()->is('backend/athletes*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base font-normal rounded-md flex items-center p-2 hover:text-white hover:bg-cyan-700 group">
                            <i class="fa-solid fa-user-tie hover:text-gray-900"></i>
                            <span class="ml-3">Athletes</span>
                            </Link>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view tags')): ?>
                        <li>
                            <Link href="/backend/tags"
                                  class="<?php echo e(request()->is('backend/tags*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base font-normal rounded-md flex items-center p-2 hover:text-white hover:bg-cyan-700 group">
                            <i class="fa-solid fa-tags hover:text-gray-900"></i>
                            <span class="ml-3">Tags</span>
                            </Link>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="space-y-2 pt-2">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view administrators')): ?>
                        <Link href="<?php echo e(route('administrators.index')); ?>"
                              class="<?php echo e(request()->is('backend/administrators*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base text-cyan-700 font-normal rounded-lg hover:bg-cyan-700 hover:text-white group transition duration-75 flex items-center p-2">
                        <i class="fa-solid fa-users hover:text-gray-900"></i>
                        <span class="ml-3 flex-1 whitespace-nowrap">Administrators</span>
                        </Link>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view settings')): ?>
                        <Link href="<?php echo e(route('settings.index')); ?>"
                              class="<?php echo e(request()->is('backend/settings*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base text-cyan-700 font-normal rounded-lg hover:bg-cyan-700 hover:text-white group transition duration-75 flex items-center p-2">
                        <i class="fa-solid fa-gear hover:text-gray-900"></i>
                        <span class="ml-3 flex-1 whitespace-nowrap">Settings</span>
                        </Link>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view roles')): ?>
                        <Link href="<?php echo e(route('roles.index')); ?>"
                              class="<?php echo e(request()->is('backend/roles*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base text-cyan-700 font-normal rounded-lg hover:bg-cyan-700 hover:text-white group transition duration-75 flex items-center p-2">
                        <i class="fa-solid fa-user-lock hover:text-gray-900"></i>
                        <span class="ml-3 flex-1 whitespace-nowrap">Roles</span>
                        </Link>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view permissions')): ?>
                        <Link href="<?php echo e(route('permissions.index')); ?>"
                              class="<?php echo e(request()->is('backend/permissions*') ? 'bg-cyan-700 text-white' : 'text-cyan-700'); ?> text-base text-cyan-700 font-normal rounded-lg hover:bg-cyan-700 hover:text-white group transition duration-75 flex items-center p-2">
                        <i class="fa-solid fa-user-shield hover:text-gray-900"></i>
                        <span class="ml-3 flex-1 whitespace-nowrap">Permissions</span>
                        </Link>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</aside>
<?php /**PATH /home/yoshito/Projects/abashenici/resources/views/backend/partials/_sidebar.blade.php ENDPATH**/ ?>