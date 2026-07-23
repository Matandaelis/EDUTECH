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
        <table class="mt-2" width="100%" border="0" cellspacing="4" cellpadding="0">
            <td colspan="2">
                <h2 class="heading text-center">
                    <?php echo e(trans('student.fee.receipt')); ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->cancelled_at->value): ?>
                        <span style="color: red;">(<?php echo e(trans('general.cancelled')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->rejected_at->value): ?>
                        <span style="color: orange;">(<?php echo e(trans('general.rejected')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </h2>
                <p class="text-center"><?php echo e($student->batch->course->division?->program?->name); ?>

                    <?php echo e($student->period->name); ?>

                </p>
            </td>
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
                <td class="text-right"><?php echo e($student->name); ?></td>
                <th><?php echo e(trans('student.admission.props.code_number')); ?></th>
                <td class="text-right"><?php echo e($student->code_number); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('contact.props.father_name')); ?></th>
                <td class="text-right">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                        <?php echo e($student->father_name); ?>

                    <?php else: ?>
                        <?php echo e(Str::alternateMask($student->father_name, 'x')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
                <th><?php echo e(trans('contact.props.contact_number')); ?></th>
                <td class="text-right">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                        <?php echo e($student->contact_number); ?>

                    <?php else: ?>
                        <?php echo e(Str::alternateMask($student->contact_number, 'x')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
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
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cell['key'] == 'heading'): ?>
                            <th <?php if(in_array($cell['type'], ['concession', 'amount'])): ?> class="text-right" style="text-align:right;" <?php endif; ?>>
                                <?php echo e($cell['label']); ?></th>
                        <?php elseif($cell['key'] == 'record'): ?>
                            <td <?php if(in_array($cell['type'], ['concession', 'amount'])): ?> class="text-right" <?php endif; ?>
                                <?php if(Arr::get($cell, 'align') == 'right'): ?> class="text-right" style="text-align:right;" <?php endif; ?>
                                rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>"
                                colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(empty($cell['with_concession'])): ?>
                                    <?php echo e($cell['label']); ?>

                                <?php else: ?>
                                    <span style="text-decoration: line-through;"><?php echo e($cell['label']); ?></span>
                                    <span class="font-90pc"><?php echo e($cell['with_concession']); ?></span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        <?php elseif($cell['key'] == 'footer'): ?>
                            <th <?php if(in_array($cell['type'], ['concession', 'amount'])): ?> class="text-right" rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>" colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>" <?php endif; ?>
                                <?php if(Arr::get($cell, 'align') == 'right'): ?> class="text-right" style="text-align:right;" <?php endif; ?>>
                                <?php echo e($cell['label']); ?>

                            </th>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </table>

        <table class="mt-4" width="100%" border="0">
            <tr>
                <td>
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
                </td>
                <td class="text-right">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transaction->user_id): ?>
                        <div class="font-90pc mt-1">
                            <?php echo e(trans('user.user')); ?>:
                            <?php echo e($transaction->user->name); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
            </tr>
        </table>

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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/fee-receipt.blade.php ENDPATH**/ ?>