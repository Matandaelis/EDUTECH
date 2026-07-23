<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($notPaid)): ?>
    <h3 style="margin-top: 20px;">Not Paid (<?php echo e(count($notPaid)); ?>)</h3>

    <table style="margin-top: 20px;">
        <tr>
            <th>UUID</th>
            <th>Name</th>
            <th>Team Name</th>
            <th>Period Name</th>
            <th>Admission Code</th>
            <th>Record Total</th>
            <th>Fee Total</th>
            <th>Difference</th>
            <th>Additional Charge</th>
            <th>Additional Discount</th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $notPaid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a target="_blank"
                        href="<?php echo e(route('custom.fix-additional-fee-mismatch', $transaction['uuid'])); ?>"><?php echo e($transaction['uuid']); ?></a>
                </td>
                <td><?php echo e($transaction['name']); ?></td>
                <td><?php echo e($transaction['team_name']); ?></td>
                <td><?php echo e($transaction['period_name']); ?></td>
                <td><?php echo e($transaction['admission_code']); ?></td>
                <td><?php echo e($transaction['record_total']); ?></td>
                <td><?php echo e($transaction['fee_total']); ?></td>
                <td><?php echo e($transaction['difference']); ?></td>
                <td><?php echo e($transaction['additional_charge']); ?></td>
                <td><?php echo e($transaction['additional_discount']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($paid)): ?>
    <h3 style="margin-top: 20px;">Paid (<?php echo e(count($paid)); ?>)</h3>

    <table style="margin-top: 20px;">
        <tr>
            <th>UUID</th>
            <th>Name</th>
            <th>Team Name</th>
            <th>Period Name</th>
            <th>Admission Code</th>
            <th>RecordTotal</th>
            <th>Fee Total</th>
            <th>Difference</th>
            <th>Additional Charge</th>
            <th>Additional Discount</th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $paid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a target="_blank"
                        href="<?php echo e(route('custom.fix-additional-fee-mismatch', $transaction['uuid'])); ?>"><?php echo e($transaction['uuid']); ?></a>
                </td>
                <td><?php echo e($transaction['name']); ?></td>
                <td><?php echo e($transaction['team_name']); ?></td>
                <td><?php echo e($transaction['period_name']); ?></td>
                <td><?php echo e($transaction['admission_code']); ?></td>
                <td><?php echo e($transaction['record_total']); ?></td>
                <td><?php echo e($transaction['fee_total']); ?></td>
                <td><?php echo e($transaction['difference']); ?></td>
                <td><?php echo e($transaction['additional_charge']); ?></td>
                <td><?php echo e($transaction['additional_discount']); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/custom/additional-fee-mismatch.blade.php ENDPATH**/ ?>