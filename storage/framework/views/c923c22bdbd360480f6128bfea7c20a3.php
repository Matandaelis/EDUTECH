<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalb6d39fb9f383a72e7ca17901d3013780 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6d39fb9f383a72e7ca17901d3013780 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.print.wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                    <th>#</th>
                    <th><?php echo e(trans('finance.transaction.props.code_number')); ?></th>
                    <th><?php echo e(trans('finance.transaction.props.date')); ?></th>
                    <th><?php echo e(trans('finance.payment_method.payment_method')); ?></th>
                    <th><?php echo e(trans('general.detail')); ?></th>
                    <th class="text-right"><?php echo e(trans('finance.transaction.props.amount')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($transaction->code_number); ?></td>
                        <td><?php echo e($transaction->date->formatted); ?></td>
                        <td>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $transaction->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <?php echo e($payment->method->name); ?>

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
                        </td>
                        <td>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $transaction->fee_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feePayment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="font-90pc">
                                    <div>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($feePayment->fee_head_id): ?>
                                            <?php echo e($feePayment->head?->name); ?>

                                        <?php elseif($feePayment->default_fee_head): ?>
                                            <?php echo e($feePayment->getDefaultFeeHeadName()); ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php echo e($feePayment->amount->formatted); ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                        <td class="text-right"><?php echo e($transaction->amount->formatted); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <strong><?php echo e(trans('finance.fee.total')); ?> - <?php echo e($totalAmountInWords); ?> </strong>
                    </td>
                    <td colspan="3">
                        <div class="text-right"> <?php echo e($transactions->sum('amount.value')); ?>

                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6d39fb9f383a72e7ca17901d3013780)): ?>
<?php $attributes = $__attributesOriginalb6d39fb9f383a72e7ca17901d3013780; ?>
<?php unset($__attributesOriginalb6d39fb9f383a72e7ca17901d3013780); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6d39fb9f383a72e7ca17901d3013780)): ?>
<?php $component = $__componentOriginalb6d39fb9f383a72e7ca17901d3013780; ?>
<?php unset($__componentOriginalb6d39fb9f383a72e7ca17901d3013780); ?>
<?php endif; ?>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/fee-receipts.blade.php ENDPATH**/ ?>