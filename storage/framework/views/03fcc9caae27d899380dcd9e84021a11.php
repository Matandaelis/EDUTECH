<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['metaTitle', 'metaDescription', 'metaKeywords']));

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

foreach (array_filter((['metaTitle', 'metaDescription', 'metaKeywords']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e($metaDescription); ?>">
    <meta name="keywords" content="<?php echo e($metaKeywords); ?>">
    <meta name="author" content="ScriptMint">
    <title><?php echo e($metaTitle ?? config('config.general.app_name', config('app.name', 'ScriptMint'))); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="icon" href="<?php echo e(config('config.assets.favicon')); ?>" type="image/png">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/site.js', 'resources/css/site.css'], 'site/build'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="theme-<?php echo e(config('config.site.color_scheme', 'default')); ?>">

    <?php if (isset($component)) { $__componentOriginal8e5fef682059e675a3dadff76217ff52 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8e5fef682059e675a3dadff76217ff52 = $attributes; } ?>
<?php $component = App\View\Components\Site\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8e5fef682059e675a3dadff76217ff52)): ?>
<?php $attributes = $__attributesOriginal8e5fef682059e675a3dadff76217ff52; ?>
<?php unset($__attributesOriginal8e5fef682059e675a3dadff76217ff52); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e5fef682059e675a3dadff76217ff52)): ?>
<?php $component = $__componentOriginal8e5fef682059e675a3dadff76217ff52; ?>
<?php unset($__componentOriginal8e5fef682059e675a3dadff76217ff52); ?>
<?php endif; ?>

    <?php echo e($slot); ?>


    <?php if (isset($component)) { $__componentOriginal4f4b10526116ba125054d622c33aa56f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f4b10526116ba125054d622c33aa56f = $attributes; } ?>
<?php $component = App\View\Components\Site\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f4b10526116ba125054d622c33aa56f)): ?>
<?php $attributes = $__attributesOriginal4f4b10526116ba125054d622c33aa56f; ?>
<?php unset($__attributesOriginal4f4b10526116ba125054d622c33aa56f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f4b10526116ba125054d622c33aa56f)): ?>
<?php $component = $__componentOriginal4f4b10526116ba125054d622c33aa56f; ?>
<?php unset($__componentOriginal4f4b10526116ba125054d622c33aa56f); ?>
<?php endif; ?>

    <div class="fixed bottom-40 right-6 z-50 hidden flex-col gap-3 md:flex">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.facebook')): ?>
            <a href="<?php echo e(config('config.social_network.facebook')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#1877F2] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#0d6efd]">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.twitter')): ?>
            <a href="<?php echo e(config('config.social_network.twitter')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#1DA1F2] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#0d95e8]">
                <i class="fa-brands fa-twitter"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.linkedin')): ?>
            <a href="<?php echo e(config('config.social_network.linkedin')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#0A66C2] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#094c8f]">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.youtube')): ?>
            <a href="<?php echo e(config('config.social_network.youtube')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#FF0000] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#cc0000]">
                <i class="fa-brands fa-youtube"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.google')): ?>
            <a href="<?php echo e(config('config.social_network.google')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#4285F4] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#3367d6]">
                <i class="fa-brands fa-google"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.social_network.github')): ?>
            <a href="<?php echo e(config('config.social_network.github')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-[#333333] text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-[#24292e]">
                <i class="fa-brands fa-github"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.general.app_phone')): ?>
            <a href="tel:<?php echo e(config('config.general.app_phone')); ?>"
                class="bg-site-primary hover:bg-site-dark-primary flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 text-white transition-all duration-200 hover:scale-110 hover:border-white/40">
                <i class="fa-solid fa-phone"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.general.app_email')): ?>
            <a href="mailto:<?php echo e(config('config.general.app_email')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-black text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-gray-900">
                <i class="fa-solid fa-envelope"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.general.app_email')): ?>
            <a href="https://web.whatsapp.com/send?phone=<?php echo e(config('config.general.app_phone')); ?>"
                class="flex h-12 w-12 transform items-center justify-center rounded-full border-2 border-white/20 bg-green-800 text-white transition-all duration-200 hover:scale-110 hover:border-white/40 hover:bg-green-900">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scriptConfig(); ?>

</body>

</html>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/layout.blade.php ENDPATH**/ ?>