<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'items' => [],
    'multiple' => false,
    'defaultOpen' => [],
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
    'items' => [],
    'multiple' => false,
    'defaultOpen' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="(() => {
    const multi = <?php echo e($multiple ? 'true' : 'false'); ?>;
    const openInit = <?php echo \Illuminate\Support\Js::from($defaultOpen)->toHtml() ?>;
    if (multi) {
        const state = {};
        (Array.isArray(openInit) ? openInit : []).forEach(i => state[i] = true);
        return { multiple: true, open: state, toggle(i) { this.open[i] = !this.open[i] } };
    } else {
        const idx = Number.isInteger(openInit) ? openInit : null;
        return { multiple: false, openIndex: idx, toggle(i) { this.openIndex = this.openIndex === i ? null : i } };
    }
})()" class="w-full divide-y divide-gray-200 rounded-md border border-gray-200 bg-white">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $panel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $heading = $panel['heading'] ?? '';
            $desc = $panel['description'] ?? '';
        ?>
        <section class="group">
            <h3>
                <button type="button"
                    class="flex w-full items-center justify-between px-4 py-3 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2"
                    @click="toggle(<?php echo e($i); ?>)"
                    :aria-expanded="<?php echo e($multiple ? "!!open[$i]" : "openIndex === $i"); ?>"
                    :aria-controls="'accordion-panel-<?php echo e($i); ?>'" id="accordion-header-<?php echo e($i); ?>">
                    <span class="text-sm font-medium text-gray-900"><?php echo e($heading); ?></span>
                    <svg class="h-5 w-5 shrink-0 text-gray-500 transition-transform duration-200"
                        :class="<?php echo e($multiple ? "open[$i] ? 'rotate-180' : ''" : "openIndex === $i ? 'rotate-180' : ''"); ?>"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 111.04 1.08l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.31a.75.75 0 01.02-1.1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </h3>

            <div id="accordion-panel-<?php echo e($i); ?>" role="region"
                :aria-labelledby="'accordion-header-<?php echo e($i); ?>'"
                x-show="<?php echo e($multiple ? "!!open[$i]" : "openIndex === $i"); ?>" x-collapse
                class="px-4 pb-4 text-sm text-gray-700">
                <?php echo nl2br(e($desc)); ?>

            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/accordion.blade.php ENDPATH**/ ?>