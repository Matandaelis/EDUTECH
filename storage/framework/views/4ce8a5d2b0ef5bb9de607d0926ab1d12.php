<div class="flex flex-col overflow-hidden rounded-lg border border-gray-200 shadow-lg dark:border-gray-700">
    <div class="flex-shrink-0">
        <div class="relative">
            <a href="<?php echo e('/pages/events/' . Str::slug($event->title) . '/' . $event->uuid); ?>">
                <img class="lozad h-48 w-full object-cover" data-src="<?php echo e($event->cover_image); ?>"
                    alt="<?php echo e($event->title); ?>" />
            </a>
            <div class="absolute right-0 top-0 mr-2 mt-2">
                <img class="h-8 w-8" src="<?php echo e(config('config.assets.icon')); ?>" alt="icon" />
            </div>
            <div class="absolute bottom-0 w-full bg-black bg-opacity-70">
                <div class="truncate px-4 text-lg font-semibold text-gray-200">
                    <?php echo e($event->title); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-1 flex-col justify-between bg-white p-6 dark:bg-gray-800">
        <div class="flex-1">
            <div class="flex justify-between">
                <p class="text-site-primary text-sm font-medium dark:text-gray-300">
                    <i class="fas fa-calendar"></i> <?php echo e($event->duration_in_detail); ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($event->venue): ?>
                        <span class="text-gray-500 dark:text-gray-400"> at <?php echo e($event->venue); ?></span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </p>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($event->type_id): ?>
                <p class="text-site-primary mt-2 text-sm font-medium">
                    <?php if (isset($component)) { $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.badge','data' => ['color' => 'custom','colorValue' => $event->type->color]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'custom','color-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->type->color)]); ?><?php echo e($event->type->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $attributes = $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $component = $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($event->excerpt): ?>
                <p class="mt-2 text-sm italic"><?php echo e($event->excerpt); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/event-card.blade.php ENDPATH**/ ?>