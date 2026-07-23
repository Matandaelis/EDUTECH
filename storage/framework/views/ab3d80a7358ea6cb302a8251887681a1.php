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
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($gatePass, 'audiences', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->first([config('config.print.custom_path') . 'header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <h2 class="heading"><?php echo e(trans('reception.gate_pass.gate_pass')); ?></h2>

        <table class="table">
            <tr>
                <th><?php echo e(trans('general.sno')); ?></th>
                <td><?php echo e(Arr::get($gatePass, 'code_number')); ?></td>
                <th><?php echo e(trans('reception.gate_pass.props.datetime')); ?></th>
                <td><?php echo e(Arr::get($gatePass, 'start_at.formatted')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('reception.gate_pass.props.requester')); ?></th>
                <td>
                    <?php echo e(Arr::get($audience, 'name')); ?>

                </td>
                <th>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($gatePass, 'requester_type.value') == 'employee'): ?>
                        <?php echo e(trans('employee.props.code_number')); ?>

                    <?php elseif(Arr::get($gatePass, 'requester_type.value') == 'student'): ?>
                        <?php echo e(trans('contact.props.father_name')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </th>
                <td><?php echo e(Arr::get($audience, 'detail')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('reception.gate_pass.purpose.purpose')); ?></th>
                <td colspan="3"><?php echo e(Arr::get($gatePass, 'purpose.name')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('reception.gate_pass.props.reason')); ?></th>
                <td colspan="3"><?php echo e(Arr::get($gatePass, 'reason')); ?></td>
            </tr>
        </table>
        <div class="mt-8">
            <p class="text-right"><?php echo e(trans('print.authorized_signatory')); ?></p>
        </div>
        <div class="mt-4">
            <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?>

            </p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/reception/gate-pass.blade.php ENDPATH**/ ?>