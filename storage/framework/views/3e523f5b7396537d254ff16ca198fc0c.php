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

    <h2 class="heading"><?php echo e(Arr::get($receipt, 'type.label')); ?></h2>

    <table width="100%">
        <tr>
            <td><strong><?php echo e(trans('finance.transaction.props.code_number_short')); ?>

                    <?php echo e(Arr::get($receipt, 'code_number')); ?></strong></td>
            <td class="text-right"><strong><?php echo e(trans('finance.transaction.props.date')); ?>

                    <?php echo e(Arr::get($receipt, 'date.formatted')); ?></strong></td>
        </tr>
    </table>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($receipt, 'cancelled_at.value') && Arr::get($receipt, 'cancellation_remarks')): ?>
        <div class="mt-4">
            <p style="color: red;"><?php echo e(trans('finance.transaction.props.cancellation_remarks')); ?>:
                <?php echo e(Arr::get($receipt, 'cancellation_remarks')); ?></p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($receipt, 'rejected_at.value') && Arr::get($receipt, 'rejection_remarks')): ?>
        <div class="mt-4">
            <p style="color: red;"><?php echo e(trans('finance.transaction.props.rejection_remarks')); ?>:
                <?php echo e(Arr::get($receipt, 'rejection_remarks')); ?></p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <table class="mt-4 table" style="table-layout: fixed;">
        <tr>
            <th style="width:25%;"><?php echo e(trans('general.detail')); ?></th>
            <td>
                <?php echo e(Arr::get($receipt, 'detail.name')); ?> </br>
                <span class="font-90pc"><?php echo e(Arr::get($receipt, 'detail.contact_number')); ?></span>
                <?php echo e(Arr::get($receipt, 'record.ledger.name')); ?>

            </td>
        </tr>
        <tr>
            <th style="width:25%;"><?php echo e(trans('finance.transaction.props.head')); ?></th>
            <td>
                <?php echo e(Arr::get($receipt, 'record.ledger.name')); ?>

            </td>
        </tr>
        <tr>
            <th><?php echo e(trans('finance.transaction.props.amount')); ?></th>
            <td><?php echo e(Arr::get($receipt, 'amount.formatted')); ?>

                <?php echo e(App\Helpers\CurrencyConverter::toWord(Arr::get($receipt, 'amount.value'))); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('finance.transaction.props.description')); ?></th>
            <td><?php echo e(Arr::get($receipt, 'description') ?? Arr::get($receipt, 'remarks')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('finance.payment_method.payment_method')); ?></th>
            <td>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($receipt, 'payments', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <?php echo e(Arr::get($payment, 'method_name')); ?>

                        <?php echo e(Arr::get($payment, 'amount.formatted')); ?>

                    </div>
                    <div class="font-90pc mt-1">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.reference_number')): ?>
                            <?php echo e(trans('finance.transaction.props.reference_number')); ?>:
                            <?php echo e(Arr::get($payment, 'details.reference_number')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.instrument_number')): ?>
                            <?php echo e(trans('finance.transaction.props.instrument_number')); ?>:
                            <?php echo e(Arr::get($payment, 'details.instrument_number')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.card_provider')): ?>
                            <?php echo e(trans('finance.transaction.props.card_provider')); ?>:
                            <?php echo e(Arr::get($payment, 'details.card_provider')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.instrument_date')): ?>
                            <?php echo e(trans('finance.transaction.props.instrument_date')); ?>:
                            <?php echo e(\Cal::date(Arr::get($payment, 'details.instrument_date'))->formatted); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.clearing_date')): ?>
                            <?php echo e(trans('finance.transaction.props.clearing_date')); ?>:
                            <?php echo e(\Cal::date(Arr::get($payment, 'details.clearing_date'))->formatted); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.bank_detail')): ?>
                            <?php echo e(trans('finance.transaction.props.bank_detail')); ?>:
                            <?php echo e(Arr::get($payment, 'details.bank_detail')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($payment, 'details.branch_detail')): ?>
                            <?php echo e(trans('finance.transaction.props.branch_detail')); ?>:
                            <?php echo e(Arr::get($payment, 'details.branch_detail')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
        </tr>
    </table>

    <div class="mt-4">
        <p class="font-80pc"><?php echo e(trans('user.user')); ?>: <?php echo e(Arr::get($receipt, 'user.profile.name')); ?></p>
    </div>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/finance/receipt.blade.php ENDPATH**/ ?>