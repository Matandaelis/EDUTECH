<?php if (isset($component)) { $__componentOriginal2e9170ddee0e82a7fc74230f90b41968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e9170ddee0e82a7fc74230f90b41968 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.layout','data' => ['robots' => $blog->getSeo('robots'),'metaTitle' => $blog->getSeo('meta_title') ?? $blog->title,'metaDescription' => $blog->getSeo('meta_description'),'metaKeywords' => $blog->getSeo('meta_keywords'),'publishedAt' => $blog->published_at->toIso8601String(),'modifiedAt' => $blog->updated_at->toIso8601String(),'imageSrc' => $blog->og_image ?? $blog->cover_image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['robots' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->getSeo('robots')),'metaTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->getSeo('meta_title') ?? $blog->title),'metaDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->getSeo('meta_description')),'metaKeywords' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->getSeo('meta_keywords')),'publishedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->published_at->toIso8601String()),'modifiedAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->updated_at->toIso8601String()),'imageSrc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->og_image ?? $blog->cover_image)]); ?>

    <div class="relative">
        <img class="lozad h-48 w-full object-cover lg:h-96" data-src="<?php echo e($blog->cover_image); ?>"
            alt="<?php echo e($blog->title); ?>" />
        <div class="absolute right-0 top-0 mr-2 mt-2">
            <img class="h-12 w-12" src="<?php echo e(config('config.assets.icon')); ?>" alt="icon" />
        </div>
        <div class="absolute bottom-0 w-full bg-black bg-opacity-70">
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
                    <?php echo e($blog->title); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['navs' => [
            ['name' => trans('blog.blog'), 'url' => route('site.page', ['slug' => request()->route('slug')])],
            ['name' => $blog->title],
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['name' => trans('blog.blog'), 'url' => route('site.page', ['slug' => request()->route('slug')])],
            ['name' => $blog->title],
        ])]); ?> <?php echo $__env->renderComponent(); ?>
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
                <div class="space-y-6 text-gray-800 dark:text-gray-400 col-span-1">
                    <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h1']); ?>
                        <?php echo e($blog->title); ?>

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

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->sub_title): ?>
                        <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h6','class' => 'texl-xl text-justify']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h6','class' => 'texl-xl text-justify']); ?>
                            <?php echo e($blog->sub_title); ?>

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
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->category): ?>
                            <p class="text-sm font-medium">
                                <a href="<?php echo e(route('site.page.blog-list-category', ['slug' => request()->route('slug'), 'category' => $blog->category->slug])); ?>"
                                    class="hover:underline">
                                    <?php if (isset($component)) { $__componentOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab7baa01105b3dfe1e0cf1dfc58879b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.badge','data' => ['color' => 'custom','colorValue' => $blog->category->color]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'custom','color-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog->category->color)]); ?><?php echo e($blog->category->name); ?>

                                     <?php echo $__env->renderComponent(); ?>
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
                        <p class="text-sm font-medium">
                            <i class="fas fa-calendar"></i> <?php echo e($blog->published_at->formatted); ?>

                        </p>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->tags->count()): ?>
                        <div class="flex flex-wrap gap-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $blog->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="rounded-lg bg-gray-200 px-2 py-1 text-sm text-gray-800"
                                    href="<?php echo e(route('site.page.blog-list-tag', ['slug' => request()->route('slug'), 'tag' => strtolower($tag->name)])); ?>">#<?php echo e($tag->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div class="md-content">
                        <?php echo $blog->content; ?>

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

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($relatedTagsBlog): ?>
        <section class="mb-10">
            <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['class' => 'space-y-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'space-y-6']); ?>

                <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h4']); ?>
                    <?php echo e(trans('blog.related_blog')); ?>

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
                <div class="grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.blog-card','data' => ['blog' => $relatedTagsBlog,'menu' => $menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.blog-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blog' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relatedTagsBlog),'menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff)): ?>
<?php $attributes = $__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff; ?>
<?php unset($__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff)): ?>
<?php $component = $__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff; ?>
<?php unset($__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff); ?>
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
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($relatedCategoryBlogs->count()): ?>
        <section class="mb-10">
            <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['class' => 'space-y-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'space-y-6']); ?>
                <?php if (isset($component)) { $__componentOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e16ff8b77312cb2a6a9ded0baf53997 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.heading','data' => ['heading' => 'h3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'h3']); ?>
                    <?php echo e(trans('blog.related_blog')); ?>

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
                <div class="grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $relatedCategoryBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.blog-card','data' => ['blog' => $blog,'menu' => $menu]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.blog-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blog' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog),'menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff)): ?>
<?php $attributes = $__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff; ?>
<?php unset($__attributesOriginalaafa51ca5e250ce85484a5d5eb5645ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff)): ?>
<?php $component = $__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff; ?>
<?php unset($__componentOriginalaafa51ca5e250ce85484a5d5eb5645ff); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.hljs.highlightAll();
        });
    </script>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/site/default/blog.blade.php ENDPATH**/ ?>