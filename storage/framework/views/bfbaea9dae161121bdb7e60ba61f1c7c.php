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
    <?php echo $__env->first([config('config.print.custom_path') . 'header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <h2 class="heading"><?php echo e(Arr::get($route, 'name')); ?> <span
            class="font-90pc">(<?php echo e(Arr::get($route, 'direction.label')); ?>)</span></h2>

    <table width="100%">
        <tr>
            <td><strong><?php echo e(Arr::get($route, 'vehicle.name')); ?>

                    <?php echo e(Arr::get($route, 'vehicle.registration_number')); ?></strong></td>
            <td class="text-right"><?php echo e(trans('transport.route.props.max_capacity')); ?>

                <strong><?php echo e(count(Arr::get($route, 'passengers', []))); ?> /
                    <?php echo e(Arr::get($route, 'max_capacity')); ?></strong>
            </td>
        </tr>
    </table>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('timing', $inclusions)): ?>
        <table width="100%">
            <tr>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($route, 'direction.value') == 'arrival' || Arr::get($route, 'direction.value') == 'roundtrip'): ?>
                    <td>
                        <h2 class="sub-heading"><?php echo e(trans('transport.route.arrival_stoppages')); ?></h2>
                        <table class="mt-4 table" style="table-layout: fixed;">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($route, 'arrival_stoppages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stoppage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(Arr::get($stoppage, 'name')); ?></td>
                                    <td><?php echo e(Arr::get($stoppage, 'arrival_time.formatted')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </table>
                    </td>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(Arr::get($route, 'direction.value') == 'departure' || Arr::get($route, 'direction.value') == 'roundtrip'): ?>
                    <td>
                        <h2 class="sub-heading"><?php echo e(trans('transport.route.departure_stoppages')); ?></h2>
                        <table class="mt-4 table" style="table-layout: fixed;">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($route, 'departure_stoppages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stoppage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(Arr::get($stoppage, 'name')); ?></td>
                                    <td><?php echo e(Arr::get($stoppage, 'arrival_time.formatted')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </table>
                    </td>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tr>
        </table>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('passenger', $inclusions)): ?>
        <h2 class="sub-heading"><?php echo e(trans('student.student')); ?></h2>
        <table class="mt-4 table" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th><?php echo e(trans('general.sno')); ?></th>
                    <th><?php echo e(trans('student.props.name')); ?></th>
                    <th></th>
                    <th></th>
                    <th><?php echo e(trans('transport.stoppage.stoppage')); ?></th>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($route, 'show_contact_number')): ?>
                        <th><?php echo e(trans('contact.props.contact_number')); ?></th>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = collect(Arr::get($route, 'passengers'))->filter(fn($passenger) => $passenger['type']['value'] == 'student'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'name')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'detail')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'sub_detail')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'stoppage')); ?></td>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($route, 'show_contact_number')): ?>
                            <td><?php echo e(Arr::get($passenger, 'contact_number')); ?></td>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>

        <h2 class="sub-heading"><?php echo e(trans('employee.employee')); ?></h2>
        <table class="mt-4 table" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th><?php echo e(trans('general.sno')); ?></th>
                    <th><?php echo e(trans('employee.props.name')); ?></th>
                    <th></th>
                    <th><?php echo e(trans('transport.stoppage.stoppage')); ?></th>
                    <th><?php echo e(trans('contact.props.contact_number')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = collect(Arr::get($route, 'passengers'))->filter(fn($passenger) => $passenger['type']['value'] == 'employee'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'name')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'detail')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'stoppage')); ?></td>
                        <td><?php echo e(Arr::get($passenger, 'contact_number')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/transport/route.blade.php ENDPATH**/ ?>