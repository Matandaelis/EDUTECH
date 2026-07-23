<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading' => 'h2']));

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

foreach (array_filter((['heading' => 'h2']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($heading == 'h1'): ?>
    <h1 <?php echo e($attributes->merge(['class' => 'text-4xl font-bold text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h1>
<?php elseif($heading == 'h2'): ?>
    <h2 <?php echo e($attributes->merge(['class' => 'text-2xl font-bold text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h2>
<?php elseif($heading == 'h3'): ?>
    <h3 <?php echo e($attributes->merge(['class' => 'text-xl font-semibold text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h3>
<?php elseif($heading == 'h4'): ?>
    <h4 <?php echo e($attributes->merge(['class' => 'text-xl font-semibold text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h4>
<?php elseif($heading == 'h5'): ?>
    <h5 <?php echo e($attributes->merge(['class' => 'text-lg font-medium text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h5>
<?php elseif($heading == 'h6'): ?>
    <h6 <?php echo e($attributes->merge(['class' => 'text-md font-medium text-gray-800 dark:text-gray-400'])); ?>>
        <?php echo e($slot); ?>

    </h6>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/ui/heading.blade.php ENDPATH**/ ?>