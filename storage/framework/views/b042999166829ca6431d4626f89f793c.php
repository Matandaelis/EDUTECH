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

    <h2 class="heading"><?php echo e(trans('reception.visitor_log.pass')); ?></h2>

    <table class="table">
        <tr>
            <th><?php echo e(trans('general.sno')); ?></th>
            <td><?php echo e(Arr::get($visitorLog, 'code_number')); ?></td>
            <th><?php echo e(trans('reception.visitor_log.props.entry')); ?></th>
            <td><?php echo e(Arr::get($visitorLog, 'entry_at.formatted')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('reception.visitor_log.props.name')); ?></th>
            <td>
                <?php echo e(Arr::get($visitorLog, 'name')); ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($visitorLog, 'type.value') != 'other'): ?>
                    (<?php echo e(Arr::get($visitorLog, 'type.label')); ?>)
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
            <th><?php echo e(trans('reception.visitor_log.props.contact_number')); ?></th>
            <td><?php echo e(Arr::get($visitorLog, 'contact_number')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('reception.visitor_log.purpose.purpose')); ?></th>
            <td><?php echo e(Arr::get($visitorLog, 'purpose.name')); ?></td>
            <th><?php echo e(trans('reception.visitor_log.props.count')); ?></th>
            <td><?php echo e(Arr::get($visitorLog, 'count')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('reception.visitor_log.props.whom_to_meet')); ?></th>
            <td colspan="3"><?php echo e(Arr::get($visitorLog, 'employee.name')); ?>

                (<?php echo e(Arr::get($visitorLog, 'employee.designation')); ?>)</td>
        </tr>
    </table>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/reception/visitor-pass.blade.php ENDPATH**/ ?>