<?php if (isset($component)) { $__componentOriginal50bf70515bc668868963a2292f9e0961 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50bf70515bc668868963a2292f9e0961 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.errors.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('errors.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex items-center">
        <p class="text-primary text-4xl font-extrabold sm:text-5xl">398</p>
        <div class="sm:ml-6">
            <div class="sm:border-l sm:border-gray-600 sm:pl-6">
                <h1 class="text-xl font-semibold tracking-tight text-gray-900 sm:text-2xl"><?php echo e($exception->getMessage()); ?>

                </h1>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50bf70515bc668868963a2292f9e0961)): ?>
<?php $attributes = $__attributesOriginal50bf70515bc668868963a2292f9e0961; ?>
<?php unset($__attributesOriginal50bf70515bc668868963a2292f9e0961); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50bf70515bc668868963a2292f9e0961)): ?>
<?php $component = $__componentOriginal50bf70515bc668868963a2292f9e0961; ?>
<?php unset($__componentOriginal50bf70515bc668868963a2292f9e0961); ?>
<?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/errors/398.blade.php ENDPATH**/ ?>