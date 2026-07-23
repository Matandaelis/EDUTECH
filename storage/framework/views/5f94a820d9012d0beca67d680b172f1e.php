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

    <style>
        * {
            font-size: .9rem;
        }

        .timetable {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        .timetable th,
        .timetable td {
            border: 1px solid #ddd;
            padding: 4px;
            vertical-align: top;
        }

        .timetable th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
        }

        .session-list {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .session {
            background: #e9f7ef;
            border: 1px solid #b2dfdb;
            padding: 5px;
            border-radius: 6px;
            font-size: 0.75rem;
            line-height: 1.2;
        }

        .free-slot {
            background: #fdfdfd;
            color: #999;
            font-size: 0.7rem;
            text-align: center;
            padding: 5px;
        }

        @media (max-width: 768px) {
            .timetable {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .timetable th,
            .timetable td {
                min-width: 150px;
            }
        }
    </style>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $employee = $item['employee'];
            $timetable = $item['timetable'];
            $timeSlots = $item['timeSlots'];
        ?>
        <div style="page-break-after: always;">

            <?php echo $__env->first([config('config.print.custom_path') . 'header', 'print.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <h2 class="heading">
                <?php echo e(trans('academic.timetable.teacher_timetable')); ?>

            </h2>

            <div class="mt-4 sub-heading">
                <?php echo e($employee->name . ' (' . $employee->code_number . ')'); ?>

            </div>

            <div class="mt-1 sub-heading">
                <?php echo e($employee->designation_name); ?>

            </div>

            <table class="timetable mt-4">
                <thead>
                    <tr>
                        <th>Day</th>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $timeSlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th>
                                <?php echo e(\Carbon\Carbon::parse($slot['start'])->format('h:i A')); ?><br>
                                to <?php echo e(\Carbon\Carbon::parse($slot['end'])->format('h:i A')); ?>

                            </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $timetable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dayData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><strong><?php echo e($dayData['day']); ?></strong></td>
                            <?php
                                $i = 0;
                                $totalSlots = count($timeSlots);
                            ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php while($i < $totalSlots): ?>
                                <?php
                                    $slot = $timeSlots[$i];
                                    $sessionsInSlot = collect($dayData['sessions'])
                                        ->filter(function ($s) use ($slot) {
                                            return $s['start_time'] < $slot['end'] && $s['end_time'] > $slot['start'];
                                        })
                                        ->values();

                                    if ($sessionsInSlot->isNotEmpty()) {
                                        $firstSession = $sessionsInSlot->first();
                                        $colspan = 0;
                                        for ($j = $i; $j < $totalSlots; $j++) {
                                            if (
                                                $firstSession['start_time'] < $timeSlots[$j]['end'] &&
                                                $firstSession['end_time'] > $timeSlots[$j]['start']
                                            ) {
                                                $colspan++;
                                            } else {
                                                break;
                                            }
                                        }
                                        $i += $colspan;
                                    }
                                ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sessionsInSlot->isNotEmpty()): ?>
                                    <td colspan="<?php echo e($colspan); ?>" class="session">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sessionsInSlot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="session-list">
                                                <strong><?php echo e($s['subject']); ?></strong><br>
                                                <?php echo e($s['batch']); ?><br>
                                                <span style="font-size: 0.7rem;"><?php echo e($s['room']); ?></span>
                                            </div>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$loop->last): ?>
                                                <hr>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                <?php else: ?>
                                    <td class="free-slot">Free</td>
                                    <?php $i++; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endwhile; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </tbody>
            </table>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/academic/timetable/teacher/merged.blade.php ENDPATH**/ ?>