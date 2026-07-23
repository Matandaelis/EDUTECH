<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?></title>
</head>

<body>
    <div>
        <form action="/force-change-password" method="post">
            <?php echo csrf_field(); ?>

            <div>
                <label for="type">Select User Type:</label>
                <select name="type" id="type">
                    <option value="student">Student</option>
                    <option value="employee">Employee</option>
                </select>
            </div>

            <div>
                <label for="password_type">Password:</label>
                <select name="password_type" id="password_type">
                    <option value="birth_date">Date of Birth
                    </option>
                    <option value="contact_number">Contact
                        Number</option>
                    <option value="random">Random</option>
                </select>
            </div>

            <div>
                <label for="skip">Skip:</label>
                <input type="number" name="skip" id="skip" value="" min="0">
            </div>

            <div>
                <label for="limit">Limit:</label>
                <input type="number" name="limit" id="limit" value="" min="1" max="500">
            </div>

            <div>
                <button type="submit">Generate</button>
            </div>
        </form>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($error)): ?>
        <div style="color:red; margin-top:20px;">
            <?php echo e($error); ?>

        </div>
    <?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($rows) > 0): ?>
        <table style="margin-top:20px;" border="1" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->type == 'student'): ?>
                        <th>Admission Number</th>
                        <th>Class</th>
                    <?php elseif(request()->type == 'employee'): ?>
                        <th>Employee Code</th>
                        <th>Designation</th>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(Arr::get($row, 'name')); ?></td>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->type == 'student'): ?>
                            <td><?php echo e(Arr::get($row, 'code_number')); ?></td>
                            <td><?php echo e(Arr::get($row, 'course_name') . ' ' . Arr::get($row, 'batch_name')); ?></td>
                        <?php elseif(request()->type == 'employee'): ?>
                            <td><?php echo e(Arr::get($row, 'code_number')); ?></td>
                            <td><?php echo e(Arr::get($row, 'designation')); ?></td>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <td><?php echo e(Arr::get($row, 'username')); ?></td>
                        <td><?php echo e(Arr::get($row, 'password')); ?></td>
                        <td><?php echo e(Arr::get($row, 'contact_number')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</body>

</html>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/custom/force-change-password.blade.php ENDPATH**/ ?>