<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($items)): ?>
    <header class="w-full overflow-hidden border-b border-gray-800 bg-black py-2 text-white">
        <div class="relative flex w-full overflow-hidden">
            <div x-data="{ isPaused: false }" @mouseenter="isPaused = true" @mouseleave="isPaused = false"
                :class="{ 'marquee-paused': isPaused }"
                class="animate-marquee flex space-x-2 transition-all duration-300 ease-in-out"
                style="--marquee-speed: <?php echo e($speed ?? '30s'); ?>;">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(Arr::get($item, 'url')); ?>"
                        class="whitespace-nowrap px-2"><?php echo e(Arr::get($item, 'title')); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(Arr::get($item, 'url')); ?>"
                        class="whitespace-nowrap px-2"><?php echo e(Arr::get($item, 'title')); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </header>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<div class="bg-site-primary flex h-12 items-center justify-end px-10 text-gray-200">
    <div class="sm:container">
        <div class="flex justify-end sm:justify-between">

            <div class="hidden sm:block">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.general.app_email')): ?>
                    Email: <?php echo e(config('config.general.app_email')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.general.app_phone')): ?>
                    | Phone: <?php echo e(config('config.general.app_phone')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div class="">
                <a href="/app/payment">Online Fee Payment</a> | <a href="/app/online-registration">Online
                    Registration</a>
            </div>
        </div>
    </div>
</div>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($announcementPopup): ?>
    <?php if (isset($component)) { $__componentOriginalb45ed0173456eb4b8414dfccfdd0c564 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb45ed0173456eb4b8414dfccfdd0c564 = $attributes; } ?>
<?php $component = App\View\Components\Site\PopupModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.popup-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\PopupModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcementPopup->title)]); ?>
        <?php echo $announcementPopup->description; ?>

        <?php echo $announcementPopup->description; ?>

        <?php echo $announcementPopup->description; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb45ed0173456eb4b8414dfccfdd0c564)): ?>
<?php $attributes = $__attributesOriginalb45ed0173456eb4b8414dfccfdd0c564; ?>
<?php unset($__attributesOriginalb45ed0173456eb4b8414dfccfdd0c564); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb45ed0173456eb4b8414dfccfdd0c564)): ?>
<?php $component = $__componentOriginalb45ed0173456eb4b8414dfccfdd0c564; ?>
<?php unset($__componentOriginalb45ed0173456eb4b8414dfccfdd0c564); ?>
<?php endif; ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/sticky-head.blade.php ENDPATH**/ ?>