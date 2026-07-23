<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size' => 'sm',
    'color' => 'primary',
    'colorValue' => '',
]));

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

foreach (array_filter(([
    'size' => 'sm',
    'color' => 'primary',
    'colorValue' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'inline-flex items-center',
    'px-2 py-1 text-xs font-medium rounded-full text-white' => $size === 'xs',
    'px-2 py-1 text-sm font-medium rounded-full text-white' => $size === 'sm',
    'px-4 py-1 text-base font-medium rounded-full text-white' =>
        $size === 'base',
    'px-4 py-1 text-lg font-medium rounded-full text-white' => $size === 'lg',
    'px-4 py-1 text-xl font-medium rounded-full text-white' => $size === 'xl',
    'bg-primary' => $color === 'primary',
    'bg-secondary' => $color === 'secondary',
    'bg-success' => $color === 'success',
    'bg-danger' => $color === 'danger',
    'bg-warning' => $color === 'warning',
    'bg-info' => $color === 'info',
]); ?>" <?php echo e($attributes->merge(['class' => ''])); ?> <?php if($color === 'custom'): ?>
    style="background-color: <?php echo e($colorValue); ?>; color: #fff;"
    <?php endif; ?>
    ><?php echo e($slot); ?></span>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/ui/badge.blade.php ENDPATH**/ ?>