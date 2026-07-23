<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['news', 'menu']));

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

foreach (array_filter((['news', 'menu']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="flex flex-col overflow-hidden rounded-lg border border-gray-200 shadow-lg dark:border-gray-700">
    <div class="flex-shrink-0">
        <div class="relative">
            <a href="<?php echo e('/pages/n/' . $menu->slug . '/' . $news->slug); ?>">
                <img class="lozad h-48 w-full object-cover" data-src="<?php echo e($news->cover_image); ?>"
                    alt="<?php echo e($news->title); ?>" />
            </a>
            <div class="absolute right-0 top-0 mr-2 mt-2">
                <img class="h-8 w-8" src="<?php echo e(config('config.assets.icon')); ?>" alt="icon" />
            </div>
            <div class="absolute bottom-0 w-full bg-black bg-opacity-70">
                <div class="truncate px-4 text-lg font-semibold text-gray-200">
                    <?php echo e($news->title); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-1 flex-col justify-between bg-white p-6 dark:bg-gray-800">
        <div class="flex-1">
            <div class="flex justify-between">
                <p class="text-site-primary text-sm font-medium dark:text-gray-300">
                    <i class="fas fa-calendar"></i> <?php echo e($news->published_at->formatted); ?>

                </p>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->category): ?>
                    <p class="text-site-primary text-sm font-medium">
                        <a
                            href="<?php echo e(route('site.page.news-list-category', ['slug' => $menu->slug, 'category' => $news->category->slug])); ?>">
                            <?php if (isset($component)) { $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.badge','data' => ['color' => 'custom','colorValue' => $news->category->color]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'custom','color-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($news->category->color)]); ?><?php echo e($news->category->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $attributes = $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $component = $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
                        </a>
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <a href="<?php echo e('/pages/n/' . $menu->slug . '/' . $news->slug); ?>" class="mt-2 block">
                <p class="text-xl font-semibold text-gray-900 dark:text-gray-300"><?php echo e($news->title); ?></p>
                <p class="mt-3 text-base text-gray-500 dark:text-gray-400"><?php echo e(Str::summary($news->sub_title)); ?></p>
            </a>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($news->tags->count()): ?>
            <div class="mt-2 flex flex-wrap gap-2">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $news->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="truncate rounded-lg bg-gray-200 px-2 py-1 text-sm text-gray-800 dark:bg-gray-500 dark:text-gray-300"
                        href="<?php echo e(route('site.page.news-list-tag', ['slug' => $menu->slug, 'tag' => strtolower($tag->name)])); ?>">#<?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/news-card.blade.php ENDPATH**/ ?>