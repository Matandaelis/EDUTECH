<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'centered']); ?>
    <?php echo $__env->first([config('config.print.custom_path') . 'header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <h2 class="heading"><?php echo e(trans('inventory.stock_requisition.slip')); ?></h2>

    <table class="table" border="1">
        <tr>
            <th><?php echo e(trans('general.sno')); ?></th>
            <td><?php echo e(Arr::get($stockRequisition, 'code_number')); ?></td>
            <th><?php echo e(trans('inventory.stock_requisition.props.date')); ?></th>
            <td><?php echo e(Arr::get($stockRequisition, 'date.formatted')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('inventory.vendor.vendor')); ?></th>
            <td colspan="3"><?php echo e(Arr::get($stockRequisition, 'vendor.name')); ?></td>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($stockRequisition, 'employee.name')): ?>
            <tr>
                <th><?php echo e(trans('inventory.stock_requisition.props.requested_by')); ?></th>
                <td colspan="3"><?php echo e(Arr::get($stockRequisition, 'employee.name')); ?>

                    (<?php echo e(Arr::get($stockRequisition, 'employee.designation')); ?>)</td>
            </tr>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>

    <table class="mt-2 table" width="100%" border="1" cellspacing="4" cellpadding="0">
        <thead>
            <tr>
                <th width="10%"><?php echo e(trans('general.sno')); ?></th>
                <th><?php echo e(trans('inventory.item')); ?></th>
                <th width="20%" class="text-right"><?php echo e(trans('inventory.stock_requisition.props.quantity')); ?></th>
            </tr>
        </thead>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($stockRequisition, 'items', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td>
                        <?php echo e(Arr::get($item, 'item.name')); ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($item, 'description')): ?>
                            <div class="font-90pc"><?php echo e(Arr::get($item, 'description')); ?></div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </td>
                    <td class="text-right">
                        <?php echo e(Arr::get($item, 'quantity')); ?> <?php echo e(Arr::get($item, 'item.unit')); ?>

                    </td>
                </tr>
            </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($stockRequisition, 'message_to_vendor')): ?>
        <div class="mt-8">
            <p class="font-weight-bold"><?php echo e(Arr::get($stockRequisition, 'message_to_vendor')); ?></p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="mt-8">
        <p class="text-right"><?php echo e(trans('print.authorized_signatory')); ?></p>
    </div>
    <div class="mt-4">
        <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?>

        </p>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc5b070edbb87e9023b50717f50849ddf)): ?>
<?php $attributes = $__attributesOriginalc5b070edbb87e9023b50717f50849ddf; ?>
<?php unset($__attributesOriginalc5b070edbb87e9023b50717f50849ddf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5b070edbb87e9023b50717f50849ddf)): ?>
<?php $component = $__componentOriginalc5b070edbb87e9023b50717f50849ddf; ?>
<?php unset($__componentOriginalc5b070edbb87e9023b50717f50849ddf); ?>
<?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/inventory/stock-requisition.blade.php ENDPATH**/ ?>