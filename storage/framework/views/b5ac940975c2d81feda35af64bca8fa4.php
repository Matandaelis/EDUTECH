<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size' => 'sm',
    'as' => 'button',
    'block' => false,
    'color' => 'primary',
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
    'as' => 'button',
    'block' => false,
    'color' => 'primary',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($as == 'link'): ?>
    <a <?php echo e($attributes); ?>

        <?php echo e($attributes->class([
            'justify-center shadow-xs font-medium rounded-md text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 text-sm',
            'py-2 px-4' => $size == 'sm',
            'py-3 px-4' => $size == 'md',
            'w-full block text-center' => $block,
            'inline-flex' => !$block,
            'bg-primary hover:bg-light-primary focus:ring-primary' => $color == 'primary',
            'bg-secondary hover:bg-light-secondary focus:ring-secondary' => $color == 'secondary',
            'bg-success hover:bg-light-success focus:ring-success' => $color == 'success',
            'bg-danger hover:bg-light-danger focus:ring-danger' => $color == 'danger',
            'bg-warning hover:bg-light-warning focus:ring-warning' => $color == 'warning',
            'bg-info hover:bg-light-info focus:ring-info' => $color == 'info',
        ])); ?>>
        <?php echo e($slot); ?>

    </a>
<?php else: ?>
    <button <?php echo e($attributes); ?>

        <?php echo e($attributes->class([
            'justify-center shadow-xs font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 text-sm',
            'py-2 px-4' => $size == 'sm',
            'py-3 px-4' => $size == 'md',
            'w-full block' => $block,
            'inline-flex' => !$block,
            'bg-primary hover:bg-light-primary focus:ring-primary' => $color == 'primary',
            'bg-secondary hover:bg-light-secondary focus:ring-secondary' => $color == 'secondary',
            'bg-success hover:bg-light-success focus:ring-success' => $color == 'success',
            'bg-danger hover:bg-light-danger focus:ring-danger' => $color == 'danger',
            'bg-warning hover:bg-light-warning focus:ring-warning' => $color == 'warning',
            'bg-info hover:bg-light-info focus:ring-info' => $color == 'info',
        ])); ?>>
        <?php echo e($slot); ?>

    </button>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/form/button.blade.php ENDPATH**/ ?>