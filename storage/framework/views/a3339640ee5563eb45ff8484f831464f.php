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

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-top: 0mm; page-break-after: always;">

            <div class="watermark-container">
                <img class="watermark-image" src="<?php echo e(url(config('config.assets.logo'))); ?>">

                <?php echo $__env->first(['print.custom.header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <h2 class="heading text-center">
                    <?php echo e(trans('employee.payroll.salary_slip')); ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($payroll->cancelled_at?->value): ?>
                        <span style="color: red;">(<?php echo e(trans('general.cancelled')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </h2>

                <p class="text-center"><?php echo e($payroll->period); ?> - <?php echo e($payroll->duration); ?>

                </p>

                <table class="mt-2" width="100%" border="0" cellspacing="4" cellpadding="0">
                    <tr>
                        <td width="50%" valign="top">
                            <div class="sub-heading-left"><?php echo e(trans('employee.payroll.props.code_number')); ?>:
                                <?php echo e($payroll->code_number); ?></div>
                        </td>
                        <td width="50%" valign="top">
                            <div class="sub-heading text-right"><?php echo e(trans('employee.payroll.props.date')); ?>:
                                <?php echo e(\Cal::date($payroll->created_at)->formatted); ?></div>
                        </td>
                    </tr>
                </table>
                <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                    <tr>
                        <th><?php echo e(trans('employee.props.name')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->name); ?></td>
                        <th><?php echo e(trans('employee.props.code_number')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->code_number); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(trans('employee.department.department')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->department_name); ?></td>
                        <th><?php echo e(trans('employee.designation.designation')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->designation_name); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(trans('employee.employment_status.employment_status')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->employment_status_name); ?></td>
                        <th><?php echo e(trans('employee.props.joining_date')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->joining_date->formatted); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo e(config('config.employee.unique_id_number1_label')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->unique_id_number1); ?></td>
                        <th><?php echo e(config('config.employee.unique_id_number2_label')); ?></th>
                        <td class="text-right"><?php echo e($payroll->employee->unique_id_number2); ?></td>
                    </tr>
                </table>

                <table class="mt-8 table" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">
                                <?php echo e(trans('employee.payroll.pay_head.categories.earning')); ?></th>
                            <th colspan="2" class="text-center">
                                <?php echo e(trans('employee.payroll.pay_head.categories.deduction')); ?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" valign="top" style="padding: 0px;">
                                <table width="100%">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payroll->records->where('visibility')->where('payHead.category.value', 'earning'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($record->payHead->name); ?></td>
                                            <td class="text-right"><?php echo e($record->amount->formatted); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </table>
                            </td>
                            <td colspan="2" valign="top" style="padding: 0px;">
                                <table width="100%">
                                    <?php $__currentLoopData = $payroll->records->where('visibility')->where('payHead.category.value', 'deduction'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($record->payHead->name); ?></td>
                                            <td class="text-right"><?php echo e($record->amount->formatted); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <?php $__currentLoopData = $payroll->records->where('visibility')->where('payHead.category.value', 'employee_contribution'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($record->payHead->name); ?></td>
                                            <td class="text-right"><?php echo e($record->amount->formatted); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><?php echo e(trans('employee.payroll.salary_structure.props.net_earning')); ?></td>
                            <td class="text-right"><?php echo e(\Price::from($payroll->getMeta('actual.earning'))?->formatted); ?>

                            </td>
                            <td><?php echo e(trans('employee.payroll.salary_structure.props.net_deduction')); ?></td>
                            <td class="text-right">
                                <?php echo e(\Price::from($payroll->getMeta('actual.deduction') + $payroll->getMeta('actual.employee_contribution'))?->formatted); ?>

                            </td>
                        </tr>
                    </tfoot>
                    <tfoot>
                        <tr>
                            <td><?php echo e(trans('employee.payroll.salary_structure.props.net_salary')); ?></td>
                            <td class="text-right"><?php echo e($payroll->total->formatted); ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <table class="mt-4 table" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">
                                <?php echo e(trans('employee.payroll.pay_head.categories.employer_contribution')); ?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payroll->records->where('payHead.category.value', 'employer_contribution'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($record->payHead->name); ?></td>
                                <td class="text-right"><?php echo e($record->amount->formatted); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><?php echo e(trans('employee.payroll.salary_structure.props.net_employer_contribution')); ?></td>
                            <td class="text-right">
                                <?php echo e(\Price::from($payroll->getMeta('actual.employer_contribution'))?->formatted); ?>

                            </td>
                        </tr>
                    </tfoot>
                </table>

                <table class="mt-4 table" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">
                                <?php echo e(trans('global.summary', ['attribute' => trans('attendance.attendance')])); ?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payroll->attendanceSummary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(Arr::get($attendance, 'name')); ?> (<?php echo e(Arr::get($attendance, 'code')); ?>)</td>
                                <td class="text-right"><?php echo e(Arr::get($attendance, 'count')); ?>

                                    <?php echo e(trans('list.durations.' . Arr::get($attendance, 'unit'))); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tbody>
                </table>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($payroll->account)): ?>
                    <div class="mt-4">
                        <p><span><?php echo e(trans('finance.account.props.name')); ?>:</span> <?php echo e($payroll->account->name); ?></p>
                        <p><span><?php echo e(trans('finance.account.props.number')); ?>:</span> <?php echo e($payroll->account->number); ?>

                        </p>
                        <p><span><?php echo e(trans('finance.account.props.bank_name')); ?>:</span>
                            <?php echo e(Arr::get($payroll->account->bank_details, 'bank_name')); ?></p>
                        <p><span><?php echo e(trans('finance.account.props.branch_name')); ?>:</span>
                            <?php echo e(Arr::get($payroll->account->bank_details, 'bank_branch')); ?>

                        </p>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <div class="mt-4 text-center">
                    <p><?php echo e(trans('employee.payroll.footer_info')); ?></p>
                </div>
                

                <div class="mt-4">
                    <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
                </div>
            </div>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/employee/payroll/bulk-salary-slip.blade.php ENDPATH**/ ?>