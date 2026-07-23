<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'No data found',
    'description' => 'There are no records to display at this time.',
    'icon' => 'default',
    'customIcon' => null,
    'illustration' => false,
    'size' => 'default',
    'animated' => true,
    'class' => '',
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
    'title' => 'No data found',
    'description' => 'There are no records to display at this time.',
    'icon' => 'default',
    'customIcon' => null,
    'illustration' => false,
    'size' => 'default',
    'animated' => true,
    'class' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $sizeClasses = [
        'small' => 'py-8 px-4',
        'default' => 'py-12 px-6',
        'large' => 'py-16 px-8',
    ];

    $iconSizes = [
        'small' => 'w-12 h-12',
        'default' => 'w-16 h-16',
        'large' => 'w-20 h-20',
    ];

    $illustrationSizes = [
        'small' => 'w-32 h-32',
        'default' => 'w-48 h-48',
        'large' => 'w-64 h-64',
    ];

    $icons = [
        'default' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>',
    ];
?>

<div class="<?php echo e($sizeClasses[$size] ?? $sizeClasses['default']); ?> <?php echo e($class); ?> flex flex-col items-center justify-center text-center"
    <?php if($animated): ?> x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 100)"
        x-show="show"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100" <?php endif; ?>
    role="status" aria-live="polite">
    <!-- Illustration or Icon -->
    <div class="relative mb-6">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($illustration): ?>
            <!-- Modern Illustration -->
            <div class="<?php echo e($illustrationSizes[$size] ?? $illustrationSizes['default']); ?> relative mx-auto">
                <svg viewBox="0 0 200 200" class="h-full w-full">
                    <!-- Background Circle -->
                    <circle cx="100" cy="100" r="80" fill="#f3f4f6" opacity="0.5" />
                    <circle cx="100" cy="100" r="60" fill="#e5e7eb" opacity="0.3" />

                    <!-- Empty State Illustration -->
                    <g transform="translate(100,100)">
                        <!-- Folder/Container -->
                        <rect x="-25" y="-10" width="50" height="35" rx="3" fill="#d1d5db"
                            opacity="0.8" />
                        <rect x="-20" y="-5" width="40" height="25" rx="2" fill="white" />

                        <!-- Floating Elements -->
                        <circle cx="-15" cy="-35" r="3" fill="#6366f1" opacity="0.6">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($animated): ?>
                                <animateTransform attributeName="transform" type="translate" values="0,0; 0,-5; 0,0"
                                    dur="3s" repeatCount="indefinite" />
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </circle>
                        <circle cx="15" cy="-30" r="2" fill="#8b5cf6" opacity="0.6">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($animated): ?>
                                <animateTransform attributeName="transform" type="translate" values="0,0; 0,3; 0,0"
                                    dur="2s" repeatCount="indefinite" />
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </circle>
                        <circle cx="0" cy="-45" r="1.5" fill="#06b6d4" opacity="0.6">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($animated): ?>
                                <animateTransform attributeName="transform" type="translate" values="0,0; 0,-3; 0,0"
                                    dur="4s" repeatCount="indefinite" />
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </circle>
                    </g>
                </svg>
            </div>
        <?php else: ?>
            <!-- Icon -->
            <div class="relative">
                <div
                    class="<?php echo e($iconSizes[$size] ?? $iconSizes['default']); ?> absolute inset-0 rounded-full bg-gradient-to-r from-indigo-100 to-purple-100 opacity-20">
                </div>
                <div
                    class="<?php echo e($iconSizes[$size] ?? $iconSizes['default']); ?> relative mx-auto flex items-center justify-center rounded-full border-2 border-gray-200 bg-gray-50 text-gray-400">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($customIcon): ?>
                        <?php echo $customIcon; ?>

                    <?php else: ?>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="h-2/3 w-2/3">
                            <?php echo $icons[$icon] ?? $icons['default']; ?>

                        </svg>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <!-- Content -->
    <div class="mx-auto max-w-sm">
        <h3 class="mb-2 text-lg font-semibold text-gray-900">
            <?php echo e($title); ?>

        </h3>

        <p class="mb-6 text-sm leading-relaxed text-gray-500">
            <?php echo e($description); ?>

        </p>
    </div>

    <!-- Help Text -->
    <div class="mt-4 text-xs text-gray-400">
        Need help? <a href="#" class="text-primary hover:text-dark-primary font-medium">Contact Us</a>
    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/ui/empty-state.blade.php ENDPATH**/ ?>