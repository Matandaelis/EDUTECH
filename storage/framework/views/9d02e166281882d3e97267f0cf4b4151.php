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
                    <?php echo e(trans('student.registration.receipt')); ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->cancelled_at->value): ?>
                        <span style="color: red;">(<?php echo e(trans('general.cancelled')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->rejected_at->value): ?>
                        <span style="color: orange;">(<?php echo e(trans('general.rejected')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </h2>
                <p class="text-center">
                    <?php echo e($registration->period->name); ?>

                </p>
            </td>
        </tr>
    </table>
    <table class="mt-2" width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td width="50%" valign="top">
                <div class="sub-heading-left"><?php echo e(trans('finance.transaction.props.code_number')); ?>:
                    <?php echo e($transaction->code_number); ?></div>
            </td>
            <td width="50%" valign="top">
                <div class="sub-heading text-right"><?php echo e(trans('finance.transaction.props.date')); ?>:
                    <?php echo e($transaction->date->formatted); ?></div>
            </td>
        </tr>
    </table>
    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <th><?php echo e(trans('student.props.name')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->name); ?></td>
            <th><?php echo e(trans('student.registration.props.code_number')); ?></th>
            <td class="text-right"><?php echo e($registration->code_number); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.father_name')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->father_name); ?></td>
            <th><?php echo e(trans('contact.props.contact_number')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->contact_number); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('academic.course.course')); ?></th>
            <td class="text-right">
                <?php echo e($registration->course->name); ?> <br />
                <span class="font-90pc"></span>
            </td>
            <th><?php echo e(trans('contact.props.birth_date')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->birth_date->formatted); ?></td>
        </tr>
    </table>

    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <thead>
            <tr>
                <th>
                    <div>
                        <?php echo e(trans('finance.fee_head.fee_head')); ?>

                    </div>
                </th>
                <th>
                    <div class="text-right"><?php echo e(trans('finance.transaction.props.amount')); ?></div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <?php echo e(trans('student.registration.fee')); ?>

                    </div>
                </td>
                <td>
                    <div class="text-right">
                        <?php echo e($transaction->amount->formatted); ?>

                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th><?php echo e(trans('finance.fee.total')); ?></th>
                <th>
                    <div class="text-right"><?php echo e($transaction->amount->formatted); ?></div>
                </th>
            </tr>
        </tfoot>
    </table>

    <div class="mt-4">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $transaction->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <strong><?php echo e(trans('finance.payment_method.payment_method')); ?></strong>:
                <?php echo e($payment->method->name); ?>

                <?php echo e($payment->amount->formatted); ?>

            </div>
            <div class="font-90pc mt-1">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('reference_number')): ?>
                    <?php echo e(trans('finance.transaction.props.reference_number')); ?>:
                    <?php echo e($payment->getDetail('reference_number')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('card_provider')): ?>
                    <?php echo e(trans('finance.transaction.props.card_provider')); ?>:
                    <?php echo e($payment->getDetail('card_provider')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('instrument_number')): ?>
                    <?php echo e(trans('finance.transaction.props.instrument_number')); ?>:
                    <?php echo e($payment->getDetail('instrument_number')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('instrument_date')): ?>
                    <?php echo e(trans('finance.transaction.props.instrument_date')); ?>:
                    <?php echo e(\Cal::date($payment->getDetail('instrument_date'))->formatted); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('clearing_date')): ?>
                    <?php echo e(trans('finance.transaction.props.clearing_date')); ?>:
                    <?php echo e(\Cal::date($payment->getDetail('clearing_date'))->formatted); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('bank_detail')): ?>
                    <?php echo e(trans('finance.transaction.props.bank_detail')); ?>:
                    <?php echo e($payment->getDetail('bank_detail')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payment->getDetail('branch_detail')): ?>
                    <?php echo e(trans('finance.transaction.props.branch_detail')); ?>:
                    <?php echo e($payment->getDetail('branch_detail')); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->cancelled_at->value && $transaction->cancellation_remarks): ?>
        <div class="mt-4">
            <p style="color: red;"><?php echo e(trans('finance.transaction.props.cancellation_remarks')); ?>:
                <?php echo e($transaction->cancellation_remarks); ?></p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->rejected_at->value && $transaction->rejection_remarks): ?>
        <div class="mt-4">
            <p style="color: red;"><?php echo e(trans('finance.transaction.props.rejection_remarks')); ?>:
                <?php echo e($transaction->rejection_remarks); ?></p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->is_online): ?>
        <div class="mt-4 text-center">
            <p><?php echo e(trans('finance.online_receipt_info')); ?></p>
        </div>
    <?php else: ?>
        <div class="mt-4 text-right">
            <h2><?php echo e(trans('student.fee.authorized_signatory')); ?></h2>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="mt-4">
        <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/registration-fee-receipt.blade.php ENDPATH**/ ?>