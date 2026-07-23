<h3 style="margin-top: 20px;">Not Paid (<?php echo e(count($data)); ?>)</h3>

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
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item['uuid']); ?></td>
            <td><?php echo e($item['name']); ?></td>
            <td><?php echo e($item['team_name']); ?></td>
            <td><?php echo e($item['period_name']); ?></td>
            <td><?php echo e($item['admission_code']); ?></td>
            <td><?php echo e($item['record_total']); ?></td>
            <td><?php echo e($item['fee_total']); ?></td>
            <td><?php echo e($item['difference']); ?></td>
            <td><?php echo e($item['additional_charge']); ?></td>
            <td><?php echo e($item['additional_discount']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</table>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/custom/calculation-mismatch.blade.php ENDPATH**/ ?>