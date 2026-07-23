<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'description' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'description' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div
    <?php echo e($attributes->merge(['class' => 'w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700'])); ?>>
    <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h5','class' => 'mb-2 text-3xl font-bold text-gray-900 dark:text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h5','class' => 'mb-2 text-3xl font-bold text-gray-900 dark:text-white']); ?>
        <?php echo e($title); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997)): ?>
<?php $attributes = $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997; ?>
<?php unset($__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997)): ?>
<?php $component = $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997; ?>
<?php unset($__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997); ?>
<?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($description): ?>
        <p class="mb-5 text-base text-gray-500 dark:text-gray-400 sm:text-lg"><?php echo e($description); ?></p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/ui/empty-list.blade.php ENDPATH**/ ?>