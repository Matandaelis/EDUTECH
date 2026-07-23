<div class="<?php echo e($block->has_cover && $block->cover_image ? 'border-gray-100 border-2 rounded-md shadow-md' : ''); ?> <?php if($fullHeight): ?> h-full <?php endif; ?> flex w-full flex-col text-gray-700"
    style="<?php if($block->background_color): ?> background-color: <?php echo e($block->background_color); ?>; <?php endif; ?> <?php if($block->text_color): ?> color: <?php echo e($block->text_color); ?>; <?php endif; ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->has_cover && $block->cover_image): ?>
        <img src="<?php echo e($block->cover_image); ?>" alt="<?php echo e($block->title); ?>" class="block h-auto w-full rounded-t-md">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="<?php echo e($block->has_cover && $block->cover_image ? '' : ''); ?> flex flex-1 flex-col px-4 py-2">
        <h2 class="<?php if($itemCount == 1): ?> !text-center <?php endif; ?> text-xl font-bold"
            style="<?php if($block->text_color): ?> color: <?php echo e($block->text_color); ?>; <?php endif; ?>">
            <?php echo e($block->title); ?></h2>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->sub_title): ?>
            <p class="<?php if($itemCount == 1): ?> !text-center <?php endif; ?> text-sm"><?php echo e($block->sub_title); ?></p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->type?->value == 'accordion'): ?>
            <div class="mt-2">
                <?php if (isset($component)) { $__componentOriginal571420de9f5df047459db4a4d431e9c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal571420de9f5df047459db4a4d431e9c5 = $attributes; } ?>
<?php $component = App\View\Components\Site\Accordion::resolve(['items' => $block->getMeta('accordion_items', [])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Accordion::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal571420de9f5df047459db4a4d431e9c5)): ?>
<?php $attributes = $__attributesOriginal571420de9f5df047459db4a4d431e9c5; ?>
<?php unset($__attributesOriginal571420de9f5df047459db4a4d431e9c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal571420de9f5df047459db4a4d431e9c5)): ?>
<?php $component = $__componentOriginal571420de9f5df047459db4a4d431e9c5; ?>
<?php unset($__componentOriginal571420de9f5df047459db4a4d431e9c5); ?>
<?php endif; ?>
            </div>
        <?php elseif($block->type?->value == 'stat_counter'): ?>
            <div class="mt-8">
                <div class="grid-cols-<?php echo e($block->getMeta('max_items_per_row', 2)); ?> grid gap-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $block->getMeta('stat_counter_items', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-span-<?php echo e($block->getMeta('max_items_per_row', 2)); ?> sm:col-span-1">
                            <?php if (isset($component)) { $__componentOriginal963ada2ce5ce60683fa3b0127bb66d6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal963ada2ce5ce60683fa3b0127bb66d6d = $attributes; } ?>
<?php $component = App\View\Components\Site\StatBox::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.stat-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\StatBox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item['heading']),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((int) $item['count']),'duration' => '2500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal963ada2ce5ce60683fa3b0127bb66d6d)): ?>
<?php $attributes = $__attributesOriginal963ada2ce5ce60683fa3b0127bb66d6d; ?>
<?php unset($__attributesOriginal963ada2ce5ce60683fa3b0127bb66d6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal963ada2ce5ce60683fa3b0127bb66d6d)): ?>
<?php $component = $__componentOriginal963ada2ce5ce60683fa3b0127bb66d6d; ?>
<?php unset($__componentOriginal963ada2ce5ce60683fa3b0127bb66d6d); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        <?php elseif($block->type?->value == 'testimonial'): ?>
            <div class="my-8">
                <?php if (isset($component)) { $__componentOriginalc8c5a5d69bdb761e438a4b8f85812529 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8c5a5d69bdb761e438a4b8f85812529 = $attributes; } ?>
<?php $component = App\View\Components\Site\Testimonial::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.testimonial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Site\Testimonial::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($block->getMeta('testimonial_items', [])),'autoplay' => true,'interval' => '6000','loop' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8c5a5d69bdb761e438a4b8f85812529)): ?>
<?php $attributes = $__attributesOriginalc8c5a5d69bdb761e438a4b8f85812529; ?>
<?php unset($__attributesOriginalc8c5a5d69bdb761e438a4b8f85812529); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8c5a5d69bdb761e438a4b8f85812529)): ?>
<?php $component = $__componentOriginalc8c5a5d69bdb761e438a4b8f85812529; ?>
<?php unset($__componentOriginalc8c5a5d69bdb761e438a4b8f85812529); ?>
<?php endif; ?>
            </div>
        <?php else: ?>
            <p class="mt-2 flex-1"><?php echo e(Str::limit($block->content, 1000)); ?></p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->url): ?>
            <div class="mt-2">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($block->background_color): ?>
                    <a href="<?php echo e($block->url); ?>" target="<?php echo e($block->target_url); ?>" class=""
                        style="color: <?php echo e($block->text_color); ?>">Read
                        More</a>
                <?php else: ?>
                    <a href="<?php echo e($block->url); ?>" target="<?php echo e($block->target_url); ?>"
                        class="bg-site-primary button mt-auto rounded-md px-4 py-2 text-xs">Read
                        More</a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/block-content.blade.php ENDPATH**/ ?>