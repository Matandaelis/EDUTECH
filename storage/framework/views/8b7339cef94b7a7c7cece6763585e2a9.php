<?php if (isset($component)) { $__componentOriginal2e9170ddee0e82a7fc74230f90b41968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e9170ddee0e82a7fc74230f90b41968 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.layout','data' => ['metaTitle' => $gallery->title,'metaDescription' => $gallery->excerpt,'metaKeywords' => '','publishedAt' => $gallery->created_at->toIso8601String(),'modifiedAt' => $gallery->updated_at->toIso8601String(),'imageSrc' => $gallery->thumbnail_url]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['metaTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->title),'metaDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->excerpt),'metaKeywords' => '','publishedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->created_at->toIso8601String()),'modifiedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->updated_at->toIso8601String()),'imageSrc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->thumbnail_url)]); ?>

    <div class="relative">
        <div class="bg-site-primary w-full bg-opacity-70">
            <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['class' => 'py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'py-2']); ?>
                <div class="truncate text-3xl font-semibold text-gray-200">
                    <?php echo e($gallery->title); ?>

                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $attributes = $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $component = $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
        </div>
    </div>

    <section>

        <?php if (isset($component)) { $__componentOriginal045477955e5b1d8c9df01934ca3836c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal045477955e5b1d8c9df01934ca3836c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['navs' => [['name' => $gallery->title]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['name' => $gallery->title]])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $attributes = $__attributesOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $component = $__componentOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__componentOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['class' => 'mt-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-6']); ?>
            <div class="grid grid-cols-1 gap-6">
                <div class="col-span-1 space-y-6 text-gray-800 dark:text-gray-400">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gallery->excerpt): ?>
                        <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h6','class' => 'text-justify text-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h6','class' => 'text-justify text-lg']); ?>
                            <?php echo e($gallery->excerpt); ?>

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
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="flex justify-between">
                        <div>
                            <i class="fas fa-calendar"></i> <?php echo e($gallery->date->formatted); ?>

                        </div>
                    </div>

                    <div class="my-6">
                        <?php echo $gallery->description; ?>

                    </div>
                </div>
            </div>

            <div class="my-12">

                <?php if (isset($component)) { $__componentOriginal431ef178a7380f19fced2ec3fa4c1b06 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal431ef178a7380f19fced2ec3fa4c1b06 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.image-gallery','data' => ['images' => $gallery->images
                    ->map(
                        fn($image) => [
                            'url' => $image->url,
                            'thumbnail' => $image->thumbnail_url,
                            'alt' => $gallery->title,
                            'caption' => $gallery->title,
                        ],
                    )
                    ->toArray()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.image-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($gallery->images
                    ->map(
                        fn($image) => [
                            'url' => $image->url,
                            'thumbnail' => $image->thumbnail_url,
                            'alt' => $gallery->title,
                            'caption' => $gallery->title,
                        ],
                    )
                    ->toArray())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal431ef178a7380f19fced2ec3fa4c1b06)): ?>
<?php $attributes = $__attributesOriginal431ef178a7380f19fced2ec3fa4c1b06; ?>
<?php unset($__attributesOriginal431ef178a7380f19fced2ec3fa4c1b06); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal431ef178a7380f19fced2ec3fa4c1b06)): ?>
<?php $component = $__componentOriginal431ef178a7380f19fced2ec3fa4c1b06; ?>
<?php unset($__componentOriginal431ef178a7380f19fced2ec3fa4c1b06); ?>
<?php endif; ?>

            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $attributes = $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $component = $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e9170ddee0e82a7fc74230f90b41968)): ?>
<?php $attributes = $__attributesOriginal2e9170ddee0e82a7fc74230f90b41968; ?>
<?php unset($__attributesOriginal2e9170ddee0e82a7fc74230f90b41968); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e9170ddee0e82a7fc74230f90b41968)): ?>
<?php $component = $__componentOriginal2e9170ddee0e82a7fc74230f90b41968; ?>
<?php unset($__componentOriginal2e9170ddee0e82a7fc74230f90b41968); ?>
<?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/site/default/gallery.blade.php ENDPATH**/ ?>