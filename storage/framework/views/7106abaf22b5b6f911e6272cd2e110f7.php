<?php if (isset($component)) { $__componentOriginal2e9170ddee0e82a7fc74230f90b41968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e9170ddee0e82a7fc74230f90b41968 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.layout','data' => ['metaTitle' => $event->title,'metaDescription' => '','metaKeywords' => '','publishedAt' => $event->created_at->toIso8601String(),'modifiedAt' => $event->updated_at->toIso8601String(),'imageSrc' => $event->og_image ?? $event->cover_image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['metaTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->title),'metaDescription' => '','metaKeywords' => '','publishedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->created_at->toIso8601String()),'modifiedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->updated_at->toIso8601String()),'imageSrc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->og_image ?? $event->cover_image)]); ?>

    <div class="relative">
        <img class="lozad h-48 w-full object-cover lg:h-96" data-src="<?php echo e($event->cover_image); ?>"
            alt="<?php echo e($event->title); ?>" />
        <div class="absolute right-0 top-0 mr-2 mt-2">
            <img class="h-12 w-12" src="<?php echo e(config('config.assets.icon')); ?>" alt="icon" />
        </div>
        <div class="bg-site-primary absolute bottom-0 w-full bg-opacity-70">
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
                    <?php echo e($event->title); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['navs' => [['name' => $event->title]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['name' => $event->title]])]); ?> <?php echo $__env->renderComponent(); ?>
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
                    <div class="flex justify-between">
                        <div>
                            #<?php echo e($event->code_number); ?>

                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($event->type_id): ?>
                            <div>
                                <?php if (isset($component)) { $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.badge','data' => ['color' => 'custom','colorValue' => $event->type->color]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'custom','color-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event->type->color)]); ?><?php echo e($event->type->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $attributes = $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4)): ?>
<?php $component = $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4; ?>
<?php unset($__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4); ?>
<?php endif; ?>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($event->excerpt): ?>
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
                            <?php echo e($event->excerpt); ?>

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
                            <i class="fas fa-calendar"></i> <?php echo e($event->duration_in_detail); ?> @ <?php echo e($event->venue); ?>

                        </div>
                    </div>

                    <div class="my-6">
                        <?php echo $event->description; ?>

                    </div>
                </div>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/site/default/event.blade.php ENDPATH**/ ?>