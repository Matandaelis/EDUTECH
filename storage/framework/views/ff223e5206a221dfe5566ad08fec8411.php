<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($recordMismatches->count()): ?>
    <h3 style="margin-top: 20px;">Transaction Record Mismatches (<?php echo e($recordMismatches->count()); ?>)</h3>

    <table style="margin-top: 20px;">
        <tr>
            <th>Transaction ID</th>
            <th>Code Number</th>
            <th>Amount</th>
            <th>Sum Amount</th>
            <th>Cancelled At</th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $recordMismatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($transaction->id); ?></td>
                <td><?php echo e($transaction->code_number); ?></td>
                <td><?php echo e($transaction->amount->value); ?></td>
                <td><?php echo e(round($transaction->sum_amount, 2)); ?></td>
                <td><?php echo e($transaction->cancelled_at->formatted); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($studentFeePaymentMismatches->count()): ?>
    <h3 style="margin-top: 20px;">Fee Payment Mismatches (<?php echo e($studentFeePaymentMismatches->count()); ?>)</h3>

    <table style="margin-top: 20px;">
        <tr>
            <th>Transaction ID</th>
            <th>Code Number</th>
            <th>Amount</th>
            <th>Sum Amount</th>
            <th>Cancelled At</th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $studentFeePaymentMismatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($transaction->id); ?></td>
                <td><?php echo e($transaction->code_number); ?></td>
                <td><?php echo e($transaction->amount->value); ?></td>
                <td><?php echo e(round($transaction->sum_amount, 2)); ?></td>
                <td><?php echo e($transaction->cancelled_at->formatted); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($transactionPaymentMismatches->count()): ?>
    <h3 style="margin-top: 20px;">Transaction Payment Mismatches (<?php echo e($transactionPaymentMismatches->count()); ?>)</h3>

    <table style="margin-top: 20px;">
        <tr>
            <th>Transaction ID</th>
            <th>Code Number</th>
            <th>Amount</th>
            <th>Sum Amount</th>
            <th>Cancelled At</th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $transactionPaymentMismatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($transaction->id); ?></td>
                <td><?php echo e($transaction->code_number); ?></td>
                <td><?php echo e($transaction->amount->value); ?></td>
                <td><?php echo e(round($transaction->sum_amount, 2)); ?></td>
                <td><?php echo e($transaction->cancelled_at->formatted); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/custom/fee-mismatch.blade.php ENDPATH**/ ?>