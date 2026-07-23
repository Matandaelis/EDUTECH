<?php if (isset($component)) { $__componentOriginal2e9170ddee0e82a7fc74230f90b41968 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e9170ddee0e82a7fc74230f90b41968 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.layout','data' => ['metaTitle' => $metaTitle,'metaDescription' => $metaDescription,'metaKeywords' => $metaKeywords]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['meta-title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaTitle),'meta-description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaDescription),'meta-keywords' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaKeywords)]); ?>

    <section>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($page->has_slider): ?>
            <?php if (isset($component)) { $__componentOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.default.carousel','data' => ['sliderImages' => $sliderImages]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.default.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['slider-images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sliderImages)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9)): ?>
<?php $attributes = $__attributesOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9; ?>
<?php unset($__attributesOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9)): ?>
<?php $component = $__componentOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9; ?>
<?php unset($__componentOriginal3eb4e0ac2ac8f7069cd719cb7269a9b9); ?>
<?php endif; ?>
        <?php elseif(Arr::get($page->assets, 'cover')): ?>
            <img src="<?php echo e($page->cover_image); ?>" alt="<?php echo e($page->title); ?>" class="h-auto w-full">
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </section>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(route('site.home') != request()->url()): ?>
        <?php if (isset($component)) { $__componentOriginal045477955e5b1d8c9df01934ca3836c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal045477955e5b1d8c9df01934ca3836c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['navs' => $navs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $attributes = $__attributesOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $component = $__componentOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__componentOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <section class="mb-4 mt-10">
        <div class="container">
            <h1 class="text-2xl font-bold text-gray-800"><?php echo e($page->title); ?></h1>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($page->sub_title): ?>
                <h2 class="mt-2 text-xl text-gray-700"><?php echo e($page->sub_title); ?></h2>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </section>

    <?php
        $previousPart = null;
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="<?php echo e($previousPart && $previousPart['type'] != $part['type'] ? 'my-10' : 'my-2'); ?>">
            <div class="container">
                <div class="text-gray-700">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($part['type'] == 'html'): ?>
                        <div class="md-content">
                            <?php echo $part['content']; ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($part['type'] == 'youtube'): ?>
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="aspect-h-9 aspect-w-16">
                                <iframe src="https://www.youtube.com/embed/<?php echo e($part['content']); ?>" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    <?php elseif($part['type'] == 'twitter'): ?>
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="flex justify-center">
                                <blockquote class="twitter-tweet"><a href="<?php echo e($part['content']); ?>">X</a></blockquote>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($part['type'] == 'array'): ?>
                        <div class="grid-cols-<?php echo e(count($part['content'])); ?> grid gap-4">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $part['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blockName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blockName == 'CONTACT'): ?>
                                    <?php if (isset($component)) { $__componentOriginaldb32ecbc4222a95c79137d06ebc5182d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldb32ecbc4222a95c79137d06ebc5182d = $attributes; } ?>
<?php $component = App\View\Components\Site\Contact::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Contact::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldb32ecbc4222a95c79137d06ebc5182d)): ?>
<?php $attributes = $__attributesOriginaldb32ecbc4222a95c79137d06ebc5182d; ?>
<?php unset($__attributesOriginaldb32ecbc4222a95c79137d06ebc5182d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb32ecbc4222a95c79137d06ebc5182d)): ?>
<?php $component = $__componentOriginaldb32ecbc4222a95c79137d06ebc5182d; ?>
<?php unset($__componentOriginaldb32ecbc4222a95c79137d06ebc5182d); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'PROGRAM_DETAIL'): ?>
                                    <?php if (isset($component)) { $__componentOriginalc480ced1fe4c96cdbb528b04a132de0e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc480ced1fe4c96cdbb528b04a132de0e = $attributes; } ?>
<?php $component = App\View\Components\Site\ProgramDetail::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.program-detail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\ProgramDetail::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menu)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc480ced1fe4c96cdbb528b04a132de0e)): ?>
<?php $attributes = $__attributesOriginalc480ced1fe4c96cdbb528b04a132de0e; ?>
<?php unset($__attributesOriginalc480ced1fe4c96cdbb528b04a132de0e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc480ced1fe4c96cdbb528b04a132de0e)): ?>
<?php $component = $__componentOriginalc480ced1fe4c96cdbb528b04a132de0e; ?>
<?php unset($__componentOriginalc480ced1fe4c96cdbb528b04a132de0e); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'BLOG_LIST'): ?>
                                    <?php if (isset($component)) { $__componentOriginalb7da61fe765c3a355309b43221a46ca6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb7da61fe765c3a355309b43221a46ca6 = $attributes; } ?>
<?php $component = App\View\Components\Site\BlogList::resolve(['menu' => $menu] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.blog-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\BlogList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb7da61fe765c3a355309b43221a46ca6)): ?>
<?php $attributes = $__attributesOriginalb7da61fe765c3a355309b43221a46ca6; ?>
<?php unset($__attributesOriginalb7da61fe765c3a355309b43221a46ca6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb7da61fe765c3a355309b43221a46ca6)): ?>
<?php $component = $__componentOriginalb7da61fe765c3a355309b43221a46ca6; ?>
<?php unset($__componentOriginalb7da61fe765c3a355309b43221a46ca6); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'BLOG_SUMMARY'): ?>
                                    <?php if (isset($component)) { $__componentOriginalb7da61fe765c3a355309b43221a46ca6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb7da61fe765c3a355309b43221a46ca6 = $attributes; } ?>
<?php $component = App\View\Components\Site\BlogList::resolve(['menu' => $menu,'type' => 'summary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.blog-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\BlogList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb7da61fe765c3a355309b43221a46ca6)): ?>
<?php $attributes = $__attributesOriginalb7da61fe765c3a355309b43221a46ca6; ?>
<?php unset($__attributesOriginalb7da61fe765c3a355309b43221a46ca6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb7da61fe765c3a355309b43221a46ca6)): ?>
<?php $component = $__componentOriginalb7da61fe765c3a355309b43221a46ca6; ?>
<?php unset($__componentOriginalb7da61fe765c3a355309b43221a46ca6); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'NEWS_LIST'): ?>
                                    <?php if (isset($component)) { $__componentOriginal68d0ae50b779914f2dbebf6463f17b17 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68d0ae50b779914f2dbebf6463f17b17 = $attributes; } ?>
<?php $component = App\View\Components\Site\NewsList::resolve(['menu' => $menu] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.news-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\NewsList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68d0ae50b779914f2dbebf6463f17b17)): ?>
<?php $attributes = $__attributesOriginal68d0ae50b779914f2dbebf6463f17b17; ?>
<?php unset($__attributesOriginal68d0ae50b779914f2dbebf6463f17b17); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68d0ae50b779914f2dbebf6463f17b17)): ?>
<?php $component = $__componentOriginal68d0ae50b779914f2dbebf6463f17b17; ?>
<?php unset($__componentOriginal68d0ae50b779914f2dbebf6463f17b17); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'NEWS_SUMMARY'): ?>
                                    <?php if (isset($component)) { $__componentOriginal68d0ae50b779914f2dbebf6463f17b17 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68d0ae50b779914f2dbebf6463f17b17 = $attributes; } ?>
<?php $component = App\View\Components\Site\NewsList::resolve(['menu' => $menu,'type' => 'summary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.news-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\NewsList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68d0ae50b779914f2dbebf6463f17b17)): ?>
<?php $attributes = $__attributesOriginal68d0ae50b779914f2dbebf6463f17b17; ?>
<?php unset($__attributesOriginal68d0ae50b779914f2dbebf6463f17b17); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68d0ae50b779914f2dbebf6463f17b17)): ?>
<?php $component = $__componentOriginal68d0ae50b779914f2dbebf6463f17b17; ?>
<?php unset($__componentOriginal68d0ae50b779914f2dbebf6463f17b17); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'EVENT_LIST'): ?>
                                    <?php if (isset($component)) { $__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72 = $attributes; } ?>
<?php $component = App\View\Components\Site\EventList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.event-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\EventList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72)): ?>
<?php $attributes = $__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72; ?>
<?php unset($__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72)): ?>
<?php $component = $__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72; ?>
<?php unset($__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'EVENT_SUMMARY'): ?>
                                    <?php if (isset($component)) { $__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72 = $attributes; } ?>
<?php $component = App\View\Components\Site\EventList::resolve(['type' => 'summary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.event-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\EventList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72)): ?>
<?php $attributes = $__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72; ?>
<?php unset($__attributesOriginalb6e177e5ca86d0dce1e68724a6d8cc72); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72)): ?>
<?php $component = $__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72; ?>
<?php unset($__componentOriginalb6e177e5ca86d0dce1e68724a6d8cc72); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'ANNOUNCEMENT_LIST'): ?>
                                    <?php if (isset($component)) { $__componentOriginale066818428c71cd299e699c9bdf8bf01 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale066818428c71cd299e699c9bdf8bf01 = $attributes; } ?>
<?php $component = App\View\Components\Site\AnnouncementList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.announcement-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\AnnouncementList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale066818428c71cd299e699c9bdf8bf01)): ?>
<?php $attributes = $__attributesOriginale066818428c71cd299e699c9bdf8bf01; ?>
<?php unset($__attributesOriginale066818428c71cd299e699c9bdf8bf01); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale066818428c71cd299e699c9bdf8bf01)): ?>
<?php $component = $__componentOriginale066818428c71cd299e699c9bdf8bf01; ?>
<?php unset($__componentOriginale066818428c71cd299e699c9bdf8bf01); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'ANNOUNCEMENT_SUMMARY'): ?>
                                    <?php if (isset($component)) { $__componentOriginale066818428c71cd299e699c9bdf8bf01 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale066818428c71cd299e699c9bdf8bf01 = $attributes; } ?>
<?php $component = App\View\Components\Site\AnnouncementList::resolve(['type' => 'summary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.announcement-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\AnnouncementList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale066818428c71cd299e699c9bdf8bf01)): ?>
<?php $attributes = $__attributesOriginale066818428c71cd299e699c9bdf8bf01; ?>
<?php unset($__attributesOriginale066818428c71cd299e699c9bdf8bf01); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale066818428c71cd299e699c9bdf8bf01)): ?>
<?php $component = $__componentOriginale066818428c71cd299e699c9bdf8bf01; ?>
<?php unset($__componentOriginale066818428c71cd299e699c9bdf8bf01); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'GALLERY_LIST'): ?>
                                    <?php if (isset($component)) { $__componentOriginala3583cf44ca6585a150f78f6d8c522ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3583cf44ca6585a150f78f6d8c522ec = $attributes; } ?>
<?php $component = App\View\Components\Site\GalleryList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.gallery-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\GalleryList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3583cf44ca6585a150f78f6d8c522ec)): ?>
<?php $attributes = $__attributesOriginala3583cf44ca6585a150f78f6d8c522ec; ?>
<?php unset($__attributesOriginala3583cf44ca6585a150f78f6d8c522ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3583cf44ca6585a150f78f6d8c522ec)): ?>
<?php $component = $__componentOriginala3583cf44ca6585a150f78f6d8c522ec; ?>
<?php unset($__componentOriginala3583cf44ca6585a150f78f6d8c522ec); ?>
<?php endif; ?>
                                <?php elseif($blockName == 'GALLERY_SUMMARY'): ?>
                                    <?php if (isset($component)) { $__componentOriginala3583cf44ca6585a150f78f6d8c522ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3583cf44ca6585a150f78f6d8c522ec = $attributes; } ?>
<?php $component = App\View\Components\Site\GalleryList::resolve(['type' => 'summary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.gallery-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\GalleryList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3583cf44ca6585a150f78f6d8c522ec)): ?>
<?php $attributes = $__attributesOriginala3583cf44ca6585a150f78f6d8c522ec; ?>
<?php unset($__attributesOriginala3583cf44ca6585a150f78f6d8c522ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3583cf44ca6585a150f78f6d8c522ec)): ?>
<?php $component = $__componentOriginala3583cf44ca6585a150f78f6d8c522ec; ?>
<?php unset($__componentOriginala3583cf44ca6585a150f78f6d8c522ec); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php
                                        $block = $blocks->firstWhere('name', $blockName);
                                    ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block): ?>
                                        <div
                                            class="col-span-<?php echo e(count($part['content'])); ?> md-content h-full sm:col-span-1">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->has_flipped_animation): ?>
                                                <?php if (isset($component)) { $__componentOriginal96d7a280a0399f39047a62e323762342 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal96d7a280a0399f39047a62e323762342 = $attributes; } ?>
<?php $component = App\View\Components\Site\Block::resolve(['block' => $block] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Block::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item-count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(count($part['content']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal96d7a280a0399f39047a62e323762342)): ?>
<?php $attributes = $__attributesOriginal96d7a280a0399f39047a62e323762342; ?>
<?php unset($__attributesOriginal96d7a280a0399f39047a62e323762342); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96d7a280a0399f39047a62e323762342)): ?>
<?php $component = $__componentOriginal96d7a280a0399f39047a62e323762342; ?>
<?php unset($__componentOriginal96d7a280a0399f39047a62e323762342); ?>
<?php endif; ?>
                                            <?php else: ?>
                                                <?php if (isset($component)) { $__componentOriginal00da1078c747e8a1d31287c5c34f5adb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00da1078c747e8a1d31287c5c34f5adb = $attributes; } ?>
<?php $component = App\View\Components\Site\BlockContent::resolve(['block' => $block,'fullHeight' => true,'itemCount' => count($part['content'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.block-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\BlockContent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00da1078c747e8a1d31287c5c34f5adb)): ?>
<?php $attributes = $__attributesOriginal00da1078c747e8a1d31287c5c34f5adb; ?>
<?php unset($__attributesOriginal00da1078c747e8a1d31287c5c34f5adb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00da1078c747e8a1d31287c5c34f5adb)): ?>
<?php $component = $__componentOriginal00da1078c747e8a1d31287c5c34f5adb; ?>
<?php unset($__componentOriginal00da1078c747e8a1d31287c5c34f5adb); ?>
<?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </section>
        <?php
            $previousPart = $part;
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <section class="my-10">
        <div class="container">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($page->media->isNotEmpty()): ?>
                <h2 class="mb-4 mt-8 text-xl font-bold text-gray-700">Attachments</h2>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $page->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/app/site/pages/<?php echo e($page->uuid); ?>/media/<?php echo e($media->uuid); ?>">
                            <div
                                class="flex items-center space-x-3 rounded-lg border border-gray-200 bg-white p-4 shadow-md transition-shadow duration-200 hover:shadow-lg">
                                <i class="fas <?php echo e($media->getIcon()); ?> fa-2xl text-gray-600"></i>
                                <div class="overflow-hidden">
                                    <div class="truncate font-medium text-gray-800"><?php echo e($media->file_name); ?></div>
                                    <div class="text-sm text-gray-500"><?php echo e($media->size); ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </section>

    <?php echo $__env->make('site.default.cta', ['page' => $page], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/site/default/page.blade.php ENDPATH**/ ?>