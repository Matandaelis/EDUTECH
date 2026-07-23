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
    <table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td width="33%" valign="top">
                <img src="<?php echo e(url(config('config.assets.logo'))); ?>" width="150" />
            </td>
            <td valign="top" align="right">
                <div class="heading text-right"><?php echo e(config('config.team.config.name')); ?></div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title1')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title1')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title2')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title2')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title3')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title3')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.email') || config('config.team.config.phone')): ?>
                    <div class="mt-1 text-right">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                            <span><?php echo e(config('config.team.config.email')); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                            <span><?php echo e(config('config.team.config.phone')); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.website')): ?>
                    <div class="mt-1 text-right"><?php echo e(config('config.team.config.website')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2 class="heading text-center">
                    <?php echo e(trans('finance.fee_structure.installment')); ?>

                </h2>
                <p class="text-center"><?php echo e($student->batch->course->division?->program?->name); ?>

                    <?php echo e($student->period->name); ?>

                </p>
            </td>
        </tr>
    </table>

    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <th><?php echo e(trans('student.props.name')); ?></th>
            <td class="text-right"><?php echo e($student->name); ?></td>
            <th><?php echo e(trans('student.admission.props.code_number')); ?></th>
            <td class="text-right"><?php echo e($student->code_number); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.father_name')); ?></th>
            <td class="text-right"><?php echo e($student->father_name); ?></td>
            <th><?php echo e(trans('contact.props.contact_number')); ?></th>
            <td class="text-right"><?php echo e($student->contact_number); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('academic.course.course')); ?></th>
            <td class="text-right">
                <?php echo e($student->course_name . ' ' . $student->batch_name); ?> <br />
                <span class="font-90pc"></span>
            </td>
            <th><?php echo e(trans('contact.props.birth_date')); ?></th>
            <td class="text-right"><?php echo e(\Cal::date($student->birth_date)->formatted); ?></td>
        </tr>
    </table>

    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <thead>
            <tr>
                <th>
                    <?php echo e($fee->installment->title); ?>

                </th>
                <th>
                    <?php echo e(trans('finance.fee_structure.props.due_date')); ?>:
                    <?php echo e($fee->getDueDate()?->formatted); ?>

                </th>
            </tr>
        </thead>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($fee->transport_circle_id || $fee->fee_concession_id): ?>
            <tbody>
                <tr>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($fee->transport_circle_id): ?>
                        <td>
                            <?php echo e(trans('transport.circle.circle')); ?>: <?php echo e($fee->transportCircle->name); ?>

                        </td>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($fee->fee_concession_id): ?>
                        <td>
                            <?php echo e(trans('finance.fee_concession.fee_concession')); ?>: <?php echo e($fee->concession->name); ?>

                        </td>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tr>
            </tbody>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>

    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <thead>
            <tr>
                <th>
                    <?php echo e(trans('finance.fee_head.fee_head')); ?>

                </th>
                <th class="text-right">
                    <?php echo e(trans('finance.fee_structure.props.amount')); ?>

                </th>
                <th class="text-right">
                    <?php echo e(trans('finance.fee.paid')); ?>

                </th>
                <th class="text-right">
                    <?php echo e(trans('finance.fee.balance')); ?>

                </th>
            </tr>
        </thead>
        <tbody>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $fee->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feeRecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($feeRecord->fee_head_id): ?>
                            <?php echo e($feeRecord->head?->name); ?>

                        <?php else: ?>
                            <?php echo e($feeRecord->getDefaultFeeHeadName()); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </td>
                    <td class="text-right">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($feeRecord->concession->value): ?>
                            <span style="text-decoration: line-through"> <?php echo e($feeRecord->amount->formatted); ?></span>
                            <?php echo e($feeRecord->getBalance()->formatted); ?>

                        <?php else: ?>
                            <?php echo e($feeRecord->amount->formatted); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </td>
                    <td class="text-right">
                        <?php echo e($feeRecord->paid->formatted); ?>

                    </td>
                    <td class="text-right">
                        <?php echo e($feeRecord->getBalance()?->formatted); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td><?php echo e(trans('general.total')); ?></td>
                <td class="text-right"><?php echo e($fee->total->formatted); ?></td>
                <td class="text-right"><?php echo e($fee->paid->formatted); ?></td>
                <td class="text-right"><?php echo e($fee->getBalance()?->formatted); ?></td>
            </tr>
        </tfoot>
    </table>

    <div class="mt-4">
        <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
    </div>

    <div class="mt-4 text-right">
        <h2><?php echo e(trans('student.fee.authorized_signatory')); ?></h2>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/fee-installment.blade.php ENDPATH**/ ?>