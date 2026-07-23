<header id="navbar" class="inset-0 z-40 w-full items-center bg-slate-100 transition-all">
    <?php if (isset($component)) { $__componentOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c = $attributes; } ?>
<?php $component = App\View\Components\Site\StickyHead::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.sticky-head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\StickyHead::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c)): ?>
<?php $attributes = $__attributesOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c; ?>
<?php unset($__attributesOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c)): ?>
<?php $component = $__componentOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c; ?>
<?php unset($__componentOriginal57d3e86a6d6de53b1cedcb3c9d10bf4c); ?>
<?php endif; ?>

    <div class="container">
        <nav class="flex items-center">
            <div class="flex h-20 items-center">
                <a href="<?php echo e(route('site.home')); ?>">
                    <img src="<?php echo e(config('config.assets.logo')); ?>" class="logo-dark h-12" alt="Logo Dark">
                    <img src="<?php echo e(config('config.assets.logo')); ?>" class="logo-light h-12" alt="Logo Light">
                </a>
            </div>

            <div class="ms-auto hidden lg:block">
                <ul class="navbar-nav flex items-center justify-center gap-x-1">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $headerMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu->children->count()): ?>
                            <li class="nav-item group relative">
                                <a href="javascript:void(0);" class="nav-link flex items-center">
                                    <?php echo e($menu->name); ?> <i
                                        class="fa-solid fa-angle-down ms-2 align-middle transition-transform group-hover:rotate-180"></i>
                                </a>

                                <div
                                    class="invisible absolute left-0 top-full z-50 mt-2 w-48 origin-top scale-95 transform opacity-0 transition-all duration-200 group-hover:visible group-hover:scale-100 group-hover:opacity-100">
                                    <div class="space-y-1.5 rounded-lg border border-gray-200 bg-white p-2 shadow-lg">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="nav-item">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($child->is_external): ?>
                                                    <a class="nav-link block rounded-md px-3 py-2 transition-colors hover:bg-gray-100"
                                                        href="<?php echo e($child->url); ?>"><?php echo e($child->name); ?></a>
                                                <?php else: ?>
                                                    <a class="nav-link block rounded-md px-3 py-2 transition-colors hover:bg-gray-100"
                                                        href="<?php echo e($child->url); ?>"><?php echo e($child->name); ?></a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu->is_external): ?>
                                    <a class="nav-link" href="<?php echo e($menu->url); ?>"><?php echo e($menu->name); ?></a>
                                <?php else: ?>
                                    <a class="nav-link" href="<?php echo e($menu->url); ?>"><?php echo e($menu->name); ?></a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
            </div>

            <div class="ms-3 hidden items-center lg:flex">
                <a href="/app/login" target="_blank"
                    class="bg-site-primary inline-flex items-center rounded px-4 py-2 text-sm text-white">Login</a>
            </div>

            <div class="ms-auto flex items-center px-2.5 lg:hidden">
                <button type="button" id="mobileMenuBtn" class="mobile-menu-btn">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

<div id="mobileMenu"
    class="fixed end-0 top-0 z-50 hidden h-full w-full max-w-md transform border-s bg-white transition-all duration-200">
    <div class="flex h-full flex-col divide-y-2 divide-gray-200">
        <div class="flex items-center justify-between p-6">
            <a href="<?php echo e(route('site.home')); ?>">
                <img src="<?php echo e(config('config.assets.icon')); ?>" class="h-16" alt="Logo">
            </a>

            <button id="closeMobileMenu" class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <div class="h-full overflow-scroll p-6">
            <ul class="navbar-nav flex flex-col gap-2">

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $headerMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu->children->count()): ?>
                        <li class="nav-item">
                            <button type="button"
                                class="nav-link mobile-dropdown-btn flex w-full items-center justify-between text-left"
                                data-menu="<?php echo e($menu->slug); ?>">
                                <?php echo e($menu->name); ?> <i class="fa-solid fa-angle-down transition-transform"></i>
                            </button>

                            <ul class="mobile-dropdown hidden space-y-2 overflow-hidden transition-all duration-300"
                                data-menu="<?php echo e($menu->slug); ?>">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item mt-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($child->is_external): ?>
                                            <a class="nav-link ml-4 block pl-8"
                                                href="<?php echo e($child->url); ?>"><?php echo e($child->name); ?></a>
                                        <?php else: ?>
                                            <a class="nav-link ml-4 block pl-8"
                                                href="<?php echo e($child->url); ?>"><?php echo e($child->name); ?></a>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu->is_external): ?>
                                <a class="nav-link" href="<?php echo e($menu->url); ?>"><?php echo e($menu->name); ?></a>
                            <?php else: ?>
                                <a class="nav-link" href="<?php echo e($menu->url); ?>"><?php echo e($menu->name); ?></a>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        </div>

        <div class="flex items-center justify-center p-6">
            <a href="/app/login" target="_blank"
                class="bg-site-primary flex w-full items-center justify-center rounded p-3 text-sm text-white">Login</a>
        </div>
    </div>
</div>

<script>
    // Mobile menu functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');

        // Toggle mobile menu
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('translate-x-0');
            mobileMenu.classList.remove('translate-x-full');
        });

        // Close mobile menu
        closeMobileMenu.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
        });

        // Mobile dropdown functionality
        mobileDropdownBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const menuSlug = this.getAttribute('data-menu');
                const dropdown = document.querySelector(
                    `.mobile-dropdown[data-menu="${menuSlug}"]`);
                const icon = this.querySelector('i');

                // Close all other dropdowns first
                mobileDropdownBtns.forEach(otherBtn => {
                    if (otherBtn !== btn) {
                        const otherMenuSlug = otherBtn.getAttribute('data-menu');
                        const otherDropdown = document.querySelector(
                            `.mobile-dropdown[data-menu="${otherMenuSlug}"]`);
                        const otherIcon = otherBtn.querySelector('i');

                        if (otherDropdown && !otherDropdown.classList.contains(
                                'hidden')) {
                            otherDropdown.classList.add('hidden');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });

                // Toggle current dropdown
                if (dropdown.classList.contains('hidden')) {
                    dropdown.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    dropdown.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
            }
        });
    });
</script>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/header.blade.php ENDPATH**/ ?>