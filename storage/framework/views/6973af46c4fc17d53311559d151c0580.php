<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'Total Students',
    'value' => 12345,
    'duration' => 1200,
    'decimals' => 0,
    'prefix' => '',
    'suffix' => '',
    'startOnVisible' => true,
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
    'title' => 'Total Students',
    'value' => 12345,
    'duration' => 1200,
    'decimals' => 0,
    'prefix' => '',
    'suffix' => '',
    'startOnVisible' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="countUp({
    end: <?php echo e((float) $value); ?>,
    duration: <?php echo e((int) $duration); ?>,
    decimals: <?php echo e((int) $decimals); ?>,
    prefix: <?php echo \Illuminate\Support\Js::from($prefix)->toHtml() ?>,
    suffix: <?php echo \Illuminate\Support\Js::from($suffix)->toHtml() ?>,
    startOnVisible: <?php echo e($startOnVisible ? 'true' : 'false'); ?>,
})" x-init="init()" x-intersect.once="startOnVisible && start()"
    class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
    <div class="text-sm font-medium text-gray-600"><?php echo e($title); ?></div>

    <div class="mt-2 flex items-baseline gap-2">
        <div class="text-4xl font-semibold tabular-nums text-gray-900">
            <span x-text="display"></span>
        </div>
        <div class="text-xs text-gray-500" x-show="suffix && !suffix.match(/%$/)"></div>
    </div>
</div>

<script>
    function countUp({
        end,
        duration = 1200,
        decimals = 0,
        prefix = '',
        suffix = '',
        startOnVisible = true
    }) {
        return {
            startOnVisible,
            end: Number(end) || 0,
            duration: Math.max(0, Number(duration) || 0),
            decimals: Math.max(0, Math.min(6, Number(decimals) || 0)),
            prefix,
            suffix,
            display: '0',
            _started: false,
            _raf: null,

            init() {
                const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                if (!this.startOnVisible && !prefersReduced) {
                    this.start();
                } else if (!this.startOnVisible && prefersReduced) {
                    this.display = this.format(this.end);
                }
            },

            start() {
                if (this._started) return;
                this._started = true;

                const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                if (prefersReduced || this.duration === 0) {
                    this.display = this.format(this.end);
                    return;
                }

                const startTime = performance.now();
                const startVal = 0;
                const endVal = this.end;
                const ease = t => 1 - Math.pow(1 - t, 3);

                const tick = (now) => {
                    const elapsed = now - startTime;
                    const t = Math.min(1, elapsed / this.duration);
                    const value = startVal + (endVal - startVal) * ease(t);
                    this.display = this.format(value);
                    if (t < 1) this._raf = requestAnimationFrame(tick);
                    else this._raf = null;
                };

                this._raf = requestAnimationFrame(tick);
            },

            format(val) {
                const fixed = Number(val).toFixed(this.decimals);
                const withCommas = fixed.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                return `${this.prefix}${withCommas}${this.suffix}`;
            }
        }
    }
</script>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/stat-box.blade.php ENDPATH**/ ?>