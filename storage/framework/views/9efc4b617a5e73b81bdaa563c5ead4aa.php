<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <img class="h-48 w-full object-cover lg:h-72" src="/images/site-background.jpg" />

    <div class="-mt-16 flex w-full items-center justify-center">
        <div class="bg-site-primary flex h-32 w-32 items-center justify-center rounded-full text-5xl text-white">
            <?php echo e(Str::substr(config('app.name'), 0, 1)); ?></div>
    </div>

    <h1 class="mt-6 text-center text-4xl">
        <?php echo e(config('app.name')); ?>

    </h1>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $attributes = $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $component = $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/pages/index.blade.php ENDPATH**/ ?>