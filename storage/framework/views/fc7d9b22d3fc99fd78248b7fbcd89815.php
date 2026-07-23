<?php if (isset($component)) { $__componentOriginal1430cadc3c3da6c9de4984abc775eeb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1430cadc3c3da6c9de4984abc775eeb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.message.layout','data' => ['url' => $url,'actionText' => $actionText]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'action-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actionText)]); ?>
    <div class="flex items-center">
        <p class="text-primary text-4xl font-extrabold sm:text-5xl">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($type) && $type == 'success'): ?>
                <i class="fas fa-check-circle text-success h-12 w-12"></i>
            <?php else: ?>
                <i class="fas fa-circle-exclamation text-danger h-12 w-12"></i>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </p>
        <div class="sm:ml-6">
            <div class="sm:border-l sm:border-gray-600 sm:pl-6">
                <h1 class="text-xl font-semibold tracking-tight text-gray-900 sm:text-2xl"><?php echo e($message); ?>

                </h1>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1430cadc3c3da6c9de4984abc775eeb5)): ?>
<?php $attributes = $__attributesOriginal1430cadc3c3da6c9de4984abc775eeb5; ?>
<?php unset($__attributesOriginal1430cadc3c3da6c9de4984abc775eeb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1430cadc3c3da6c9de4984abc775eeb5)): ?>
<?php $component = $__componentOriginal1430cadc3c3da6c9de4984abc775eeb5; ?>
<?php unset($__componentOriginal1430cadc3c3da6c9de4984abc775eeb5); ?>
<?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/messages/alert.blade.php ENDPATH**/ ?>