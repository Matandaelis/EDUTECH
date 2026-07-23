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

    <div class="watermark-container">
        <img class="watermark-image" src="<?php echo e(url(config('config.assets.logo'))); ?>">

        <?php echo $__env->first(['print.custom.header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <h2 class="heading text-center">
            <?php echo e(trans('approval.request.request')); ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($approvalRequest, 'status.value') == 'approved'): ?>
                <span style="color: green;">(<?php echo e(trans('approval.statuses.approved')); ?>)</span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </h2>

        <table class="mt-2" width="100%" border="0" cellspacing="4" cellpadding="0">
            <tr>
                <td width="50%" valign="top">
                    <div class="sub-heading-left"><?php echo e(trans('approval.request.props.code_number')); ?>:
                        <?php echo e(Arr::get($approvalRequest, 'code_number')); ?> /
                        <?php echo e(trans('approval.request.props.id_number')); ?>: <?php echo e($idNumber); ?></div>
                </td>
                <td width="50%" valign="top">
                    <div class="sub-heading text-right"><?php echo e(trans('approval.request.props.date')); ?>:
                        <?php echo e(Arr::get($approvalRequest, 'date.formatted')); ?></div>
                </td>
            </tr>
        </table>

        <div class="sub-heading"><?php echo e(trans('approval.request.props.title')); ?>: <?php echo e(Arr::get($approvalRequest, 'title')); ?>

        </div>
        

        <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
            <tr>
                <th><?php echo e(trans('employee.department.department')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'type.department.name')); ?></td>
                <th><?php echo e(trans('approval.type.type')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'type.name')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('approval.type.props.category')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'type.category.label')); ?></td>
                <th><?php echo e(trans('approval.request.props.priority')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'priority.name')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('approval.request.group.group')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'group.name')); ?></td>
                <th><?php echo e(trans('approval.request.nature.nature')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'nature.name')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('approval.request.props.amount')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'amount.formatted')); ?></td>
                <th><?php echo e(trans('approval.request.props.status')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'status.label')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('approval.request.props.due_date')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'due_date.formatted')); ?></td>
                <th><?php echo e(trans('approval.request.props.requester')); ?></th>
                <td class="text-right">
                    <?php echo e(Arr::get($approvalRequest, 'requester.name')); ?>

                    (<?php echo e(Arr::get($approvalRequest, 'requester.designation')); ?>)
                </td>
            </tr>
            <tr>
                <th><?php echo e(trans('general.created_at')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'created_at.formatted')); ?></td>
                <th><?php echo e(trans('general.updated_at')); ?></th>
                <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'updated_at.formatted')); ?></td>
            </tr>
        </table>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($approvalRequest, 'type.category.value') == 'item_based'): ?>
            <h2 class="sub-heading mt-4">
                <?php echo e(trans('approval.type_approval', ['type' => trans('approval.categories.item_based')])); ?></h2>


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->query('type') == 'summary'): ?>
                <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                    <tr>
                        <th width="50%"><?php echo e(trans('inventory.vendor.vendor')); ?></th>
                        <th class="text-right" width="50%"><?php echo e(trans('general.total')); ?> </th>
                    </tr>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($approvalRequest, 'vendors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e(Arr::get($vendor, 'vendor_detail.name')); ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($vendor, 'payment_name') != Arr::get($vendor, 'vendor_detail.name')): ?>
                                    <span class="font-90pc">(<?php echo e(Arr::get($vendor, 'payment_name')); ?>)</span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                            <td class="text-right"><?php echo e(Arr::get($vendor, 'total.formatted')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <tr>
                        <th><?php echo e(trans('general.total')); ?></th>
                        <th class="text-right"><?php echo e(Arr::get($approvalRequest, 'amount.formatted')); ?></th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-right">
                            <?php echo e(App\Helpers\CurrencyConverter::toWord(Arr::get($approvalRequest, 'amount.value'))); ?>

                        </th>
                    </tr>
                </table>
            <?php else: ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($approvalRequest, 'vendors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="sub-heading mt-4"><?php echo e(trans('inventory.vendor.vendor')); ?>:
                        <?php echo e(Arr::get($vendor, 'vendor_detail.name')); ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($vendor, 'payment_name') != Arr::get($vendor, 'vendor_detail.name')): ?>
                            <span class="font-90pc">(<?php echo e(Arr::get($vendor, 'payment_name')); ?>)</span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </h3>

                    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                        <tr>
                            <th width="50%"><?php echo e(trans('approval.request.item')); ?></th>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($approvalRequest, 'type.item_based_type') == 'item_with_quantity'): ?>
                                <th width="10%"><?php echo e(trans('inventory.stock_item.props.quantity')); ?></th>
                                <th width="20%"><?php echo e(trans('inventory.stock_item.props.unit')); ?></th>
                                <th width="20%" class="text-right"><?php echo e(trans('inventory.stock_item.props.price')); ?>

                                </th>
                            <?php else: ?>
                                <th class="text-right" width="50%"><?php echo e(trans('finance.transaction.props.amount')); ?>

                                </th>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($vendor, 'items'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(Arr::get($item, 'item')); ?></td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($approvalRequest, 'type.item_based_type') == 'item_with_quantity'): ?>
                                    <td><?php echo e(Arr::get($item, 'quantity')); ?></td>
                                    <td><?php echo e(Arr::get($item, 'unit')); ?></td>
                                    <td class="text-right"><?php echo e(Arr::get($item, 'price.formatted')); ?></td>
                                <?php else: ?>
                                    <td class="text-right"><?php echo e(Arr::get($item, 'amount.formatted')); ?></td>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </tr>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($item, 'description')): ?>
                                <tr>
                                    <td colspan="4" class="font-90pc"><?php echo e(Arr::get($item, 'description')); ?></td>
                                </tr>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <tr>
                            <th
                                colspan="<?php echo e(Arr::get($approvalRequest, 'type.item_based_type') == 'item_with_quantity' ? 3 : 1); ?>">
                                <?php echo e(trans('general.total')); ?></th>
                            <th class="text-right"><?php echo e(Arr::get($vendor, 'total.formatted')); ?></th>
                        </tr>
                    </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                    <tr>
                        <th><?php echo e(trans('general.total')); ?></th>
                        <th class="text-right"><?php echo e(Arr::get($approvalRequest, 'amount.formatted')); ?></th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-right">
                            <?php echo e(App\Helpers\CurrencyConverter::toWord(Arr::get($approvalRequest, 'amount.value'))); ?>

                        </th>
                    </tr>
                </table>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(Arr::get($approvalRequest, 'type.category.value') == 'payment_based'): ?>
            <h2 class="sub-heading mt-4">
                <?php echo e(trans('approval.type_approval', ['type' => trans('approval.categories.payment_based')])); ?></h2>
            <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                <tr>
                    <th><?php echo e(trans('finance.transaction.props.payee')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.vendor')); ?></td>
                    <th><?php echo e(trans('approval.request.props.amount')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.amount.formatted')); ?></td>
                </tr>
                <tr>
                    <th><?php echo e(trans('finance.transaction.props.invoice_number')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.invoice_number')); ?></td>
                    <th><?php echo e(trans('finance.transaction.props.invoice_date')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.invoice_date.formatted')); ?></td>
                </tr>
                <tr>
                    <th><?php echo e(trans('finance.transaction.props.mode')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.mode')); ?></td>
                    <th><?php echo e(trans('finance.transaction.props.details')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'payment.details')); ?></td>
                </tr>
            </table>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(Arr::get($approvalRequest, 'type.category.value') == 'contact_based'): ?>
            <h2 class="sub-heading mt-4">
                <?php echo e(trans('approval.type_approval', ['type' => trans('approval.categories.contact_based')])); ?></h2>
            <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
                <tr>
                    <th><?php echo e(trans('contact.props.name')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.name')); ?></td>
                    <th><?php echo e(trans('contact.props.contact_number')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.contact_number')); ?></td>
                </tr>
                <tr>
                    <th><?php echo e(trans('contact.props.email')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.email')); ?></td>
                    <th><?php echo e(trans('contact.props.website')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.website')); ?></td>
                </tr>
                <tr>
                    <th><?php echo e(trans('contact.props.tax_number')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.tax_number')); ?></td>
                    <th><?php echo e(trans('contact.props.address.address')); ?></th>
                    <td class="text-right"><?php echo e(Arr::get($approvalRequest, 'contact.address_display')); ?></td>
                </tr>
            </table>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($approvalRequest, 'purpose')): ?>
            <h2 class="sub-heading mt-4">
                <?php echo e(trans('approval.type_approval', ['type' => trans('approval.categories.other')])); ?></h2>
            <p class="font-90pc mt-4"><?php echo e(Arr::get($approvalRequest, 'purpose')); ?></p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <p class="font-90pc mt-4"><?php echo e(Arr::get($approvalRequest, 'description')); ?></p>

        <h2 class="sub-heading mt-4"><?php echo e(trans('approval.approvers')); ?></h2>
        <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
            <tr>
                <th><?php echo e(trans('approval.approver')); ?></th>
                <th><?php echo e(trans('approval.request.props.status')); ?></th>
                <th><?php echo e(trans('approval.request.props.received_at')); ?></th>
                <th><?php echo e(trans('approval.request.props.processed_at')); ?></th>
                <th><?php echo e(trans('approval.request.props.duration')); ?></th>
            </tr>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($approvalRequest, 'records'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(Arr::get($record, 'employee.name')); ?>

                        (<?php echo e(Arr::get($record, 'employee.designation')); ?>)
                    </td>
                    <td><?php echo e(Arr::get($record, 'status.label')); ?></td>
                    <td><?php echo e(Arr::get($record, 'received_at.formatted')); ?></td>
                    <td><?php echo e(Arr::get($record, 'processed_at.formatted')); ?>

                    </td>
                    <td><?php echo e(Arr::get($record, 'duration')); ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="font-90pc"><?php echo e(Arr::get($record, 'comment')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </table>

        <div class="mt-4 text-right">
            <h2><?php echo e(trans('approval.authorized_signatory')); ?></h2>
        </div>

        <div class="mt-4">
            <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
        </div>

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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/approval/request.blade.php ENDPATH**/ ?>