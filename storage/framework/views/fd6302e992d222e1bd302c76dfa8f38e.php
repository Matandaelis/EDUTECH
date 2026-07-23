<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'color' => 'success',
    'closable' => false,
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
    'color' => 'success',
    'closable' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="py-2" x-data="{ open: true }" x-show="open">
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'flex justify-between items-center px-4 py-2 rounded',
        'bg-success text-green-50' => $color == 'success',
        'bg-danger text-red-50' => $color == 'danger',
        'bg-warning text-yellow-50' => $color == 'warning',
        'bg-info text-blue-50' => $color == 'info',
        'bg-primary text-white' => $color == 'primary',
        'bg-secondary text-gray-800' => $color == 'secondary',
    ]); ?>">
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'pr-10' => $closable,
        ]); ?>"><?php echo e($slot); ?></div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($closable): ?>
            <i class="fas fa-times cursor-pointer" @click="open = false"></i>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/ui/alert.blade.php ENDPATH**/ ?>