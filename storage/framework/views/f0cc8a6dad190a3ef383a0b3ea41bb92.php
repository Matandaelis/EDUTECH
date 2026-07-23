<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'full-page']); ?>
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

        <h2 class="heading text-center">
            <?php echo e(trans('employee.payroll.payment_advice')); ?>

        </h2>

        <h3 class="sub-heading text-center">
            <?php echo e(Arr::get($params, 'start_date')?->formatted); ?> - <?php echo e(Arr::get($params, 'end_date')?->formatted); ?>

        </h3>

        <div class="mt-4" style="page-break-before: always; max-width: 800px; margin: 0 auto;">
            <h3 class="sub-heading text-center">
                <?php echo e(Arr::get($params, 'payment_advice_period')); ?>

            </h3>

            <div class="mt-4 text-center">
                <?php echo e(Arr::get($params, 'payment_advice_bank_details')); ?>

                <?php echo e(Arr::get($params, 'payment_advice_account_details')); ?>

            </div>

            <table class="mt-4 table cellpadding" width="100%">
                <thead>
                    <tr>
                        <td>#</td>
                        <td><?php echo e(trans('employee.props.name')); ?></td>
                        <td><?php echo e(trans('finance.account.props.number')); ?></td>
                        <td><?php echo e(trans('finance.account.props.bank_name')); ?></td>
                        <td>Bank Code</td>
                        <td><?php echo e(trans('employee.payroll.salary_structure.props.net_salary')); ?></td>
                    </tr>
                    </head>
                <tbody>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $summary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e(Arr::get($value, 'name')); ?></td>
                            <td><?php echo e(Arr::get($value, 'account_number')); ?></td>
                            <td><?php echo e(Arr::get($value, 'bank_name')); ?></td>
                            <td><?php echo e(Arr::get($value, 'bank_code1')); ?></td>
                            <td><?php echo e(Arr::get($value, 'net_salary')?->formatted); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><?php echo e(trans('general.total')); ?></td>
                        <td><?php echo e($grandTotal?->formatted); ?></td>
                    </tr>
                    <tr>
                        <td colspan="7" class="text-right">
                            <?php echo e(App\Helpers\CurrencyConverter::toWord($grandTotal?->value)); ?>

                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/employee/payroll/payment-advice.blade.php ENDPATH**/ ?>