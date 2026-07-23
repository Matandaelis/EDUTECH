<!-- Add `group` here so md:group-hover works -->
<div x-data="{ flipped: false }" class="group relative h-full w-full [perspective:1200px]">

    <!-- 1) Invisible sizer sets natural height (doesn't block pointer events) -->
    <div class="pointer-events-none invisible">
        <?php if (isset($component)) { $__componentOriginal00da1078c747e8a1d31287c5c34f5adb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00da1078c747e8a1d31287c5c34f5adb = $attributes; } ?>
<?php $component = App\View\Components\Site\BlockContent::resolve(['block' => $block] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    </div>

    <!-- 2) Rotor fills container; flips on hover (md+) and on click -->
    <div class="absolute inset-0 transition-transform duration-500 will-change-transform [transform-style:preserve-3d] [transform:rotateY(0deg)] md:group-hover:[transform:rotateY(180deg)]"
        :class="flipped ? '[transform:rotateY(180deg)]' : ''" role="button" tabindex="0"
        @click="if (!$event.target.closest('a,button')) flipped = !flipped" @keydown.enter.prevent="flipped = !flipped"
        @keydown.space.prevent="flipped = !flipped">
        <!-- FRONT -->
        <div class="absolute inset-0 overflow-hidden [backface-visibility:hidden]">
            <?php if (isset($component)) { $__componentOriginal00da1078c747e8a1d31287c5c34f5adb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00da1078c747e8a1d31287c5c34f5adb = $attributes; } ?>
<?php $component = App\View\Components\Site\BlockContent::resolve(['block' => $block,'fullHeight' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>

        <!-- BACK (same content) -->
        <div class="absolute inset-0 overflow-hidden [backface-visibility:hidden] [transform:rotateY(180deg)]">
            <?php if (isset($component)) { $__componentOriginal00da1078c747e8a1d31287c5c34f5adb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00da1078c747e8a1d31287c5c34f5adb = $attributes; } ?>
<?php $component = App\View\Components\Site\BlockContent::resolve(['block' => $block,'fullHeight' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>

    </div>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/site/default/block.blade.php ENDPATH**/ ?>