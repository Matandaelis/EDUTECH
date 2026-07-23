<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => ''.e(Arr::get($layout, 'column', 1) == 1 ? 'centered' : 'full-page').'','spacing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $students->chunk(Arr::get($layout, 'column', 1)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentPair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-top: <?php echo e(Arr::get($layout, 'margin_top', 0)); ?>mm; page-break-after: always;">
            <div style="display: flex; justify-content: space-between;">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $studentPair; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="width: <?php echo e(Arr::get($layout, 'box_width')); ?>; border: 0px solid black;">

                        <div class="<?php echo e(Arr::get($layout, 'watermark') ? 'watermark-container' : ''); ?>">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'watermark')): ?>
                                <img class="watermark-image" src="<?php echo e(url(config('config.assets.logo'))); ?>">
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php echo $__env->first([
                                config('config.print.custom_path') . 'exam.marksheet.header',
                                'print.exam.marksheet.header',
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(view()->exists(config('config.print.custom_path') . 'exam.marksheet.sub-header')): ?>
                                <?php echo $__env->make(config('config.print.custom_path') . 'exam.marksheet.sub-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php else: ?>
                                <div style="padding: 10px 15px;">
                                    <table width="100%" border="0">
                                        <tr>
                                            <td colspan="2">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($title, 'label')): ?>
                                                        <div class="<?php echo e(Arr::get($title, 'class')); ?>">
                                                            <?php echo e(Arr::get($title, 'label')); ?>

                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <table class="mt-4 outer-table cellpadding" width="100%">
                                <tr>
                                    <td class="font-weight-bold"><?php echo e(trans('student.props.name')); ?></td>
                                    <td><?php echo e($student->name); ?></td>
                                    <td class="font-weight-bold"><?php echo e(trans('contact.props.gender')); ?></td>
                                    <td><?php echo e(ucfirst($student->gender)); ?></td>
                                    <td class="font-weight-bold"><?php echo e(trans('student.admission.props.code_number')); ?>

                                    </td>
                                    <td><?php echo e($student->code_number); ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold"><?php echo e(trans('academic.course.course')); ?></td>
                                    <td><?php echo e($student->course_name . ' ' . $student->batch_name); ?>

                                    </td>
                                    <td class="font-weight-bold"><?php echo e(trans('student.roll_number.roll_number')); ?></td>
                                    <td><?php echo e($student->roll_number); ?></td>
                                    <td class="font-weight-bold">Class Teacher</td>
                                    <td><?php echo e($batchIncharges); ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Rank</td>
                                    <td><?php echo e(Arr::get($student->summary, 'stats.rank')); ?> / <?php echo e($totalStudents); ?></td>
                                    <td class="font-weight-bold">Best Score</td>
                                    <td><?php echo e(Arr::get($student->summary, 'stats.highest_score')); ?></td>
                                    <td class="font-weight-bold">Lowest Score</td>
                                    <td><?php echo e(Arr::get($student->summary, 'stats.lowest_score')); ?></td>
                                </tr>
                            </table>

                            <table class="mt-4 outer-table cellpadding" width="100%">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>"
                                                <?php if(Arr::get($cell, 'type') == 'heading' || Arr::get($cell, 'type') == 'footer'): ?> class="text-center font-weight-bold" <?php endif; ?>
                                                <?php if(in_array(Arr::get($cell, 'key'), ['max_mark', 'obtained_mark', 'obtained_grade', 'rank', 'comment']) ||
                                                        in_array(Arr::get($cell, 'type'), ['summary', 'marks'])): ?> class="text-center" <?php endif; ?>>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($cell, 'key') == 'rank' && Arr::get($cell, 'type') == 'footer'): ?>
                                                    <?php echo e(Arr::get($student->summary, 'stats.rank')); ?>

                                                <?php else: ?>
                                                    <?php echo e(Arr::get($cell, 'label')); ?>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </table>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($student->grading_marks): ?>
                                <table class="mt-4 outer-table cellpadding" width="100%">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->grading_marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                    rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>"
                                                    <?php if(Arr::get($cell, 'type') == 'heading' || Arr::get($cell, 'type') == 'footer'): ?> class="text-center font-weight-bold" <?php endif; ?>
                                                    <?php if(in_array(Arr::get($cell, 'key'), ['max_mark', 'obtained_mark', 'obtained_grade', 'rank']) ||
                                                            in_array(Arr::get($cell, 'type'), ['summary', 'marks'])): ?> class="text-center" <?php endif; ?>>
                                                    <?php echo e(Arr::get($cell, 'label')); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </table>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <div class="mt-4" style="display: flex; gap: 10px;">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($student->observation_marks): ?>
                                    <div style="flex: 70%;">
                                        <table class="outer-table cellpadding" width="100%"
                                            style="margin-bottom: 10px;">
                                            <tr>
                                                <td>Attendance</td>
                                                <td><?php echo e(Arr::get($student->summary, 'attendance.present')); ?> /
                                                    <?php echo e(Arr::get($student->summary, 'attendance.working_days')); ?>

                                                </td>
                                                <td><?php echo e(Arr::get($student->summary, 'attendance.present_percentage')); ?>%
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="outer-table cellpadding" width="100%">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->observation_marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                            rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>"
                                                            <?php if(Arr::get($cell, 'type') == 'heading' || Arr::get($cell, 'type') == 'footer'): ?> class="text-center font-weight-bold" <?php endif; ?>
                                                            <?php if(in_array(Arr::get($cell, 'key'), ['max_mark', 'obtained_mark', 'obtained_grade']) ||
                                                                    in_array(Arr::get($cell, 'type'), ['summary', 'marks'])): ?> class="text-center" <?php endif; ?>>
                                                            <?php echo e(Arr::get($cell, 'label')); ?>

                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </table>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <div style="flex: 30%;" valign="top">
                                    <table class="outer-table cellpadding">
                                        <tr>
                                            <td colspan="2" style="border-left:1px solid black;">
                                                <div class="sub-heading"><?php echo e(trans('exam.grade.grade')); ?></div>
                                            </td>
                                        </tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $grade->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td style="border-left:1px solid black;">
                                                    <?php echo e(Arr::get($record, 'min_score')); ?> -
                                                    <?php echo e(Arr::get($record, 'max_score')); ?></td>
                                                <td style="border-left:1px solid black;">
                                                    <?php echo e(Arr::get($record, 'code')); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <table class="mt-4 outer-table cellpadding" width="100%">
                                <tr>
                                    <td class="font-weight-bold">Result</td>
                                    <td><?php echo e(Arr::get($student->summary, 'comment.result')); ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Class Teacher's Remark</td>
                                    <td><?php echo e(Arr::get($student->summary, 'comment.comment')); ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Principal's Remark</td>
                                    <td><?php echo e(Arr::get($student->summary, 'comment.incharge_comment')); ?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Notice</td>
                                    <td><?php echo e(Arr::get($student->summary, 'info')); ?></td>
                                </tr>
                            </table>

                            <?php echo $__env->first(['print.exam.signatory'], ['layout' => $layout, 'margin' => 'mt-32'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <div class="mt-4"
                                style="padding-left: 10px; padding-top: 10px; border-top: 1px solid gray; display: flex; justify-content: space-between;">
                                <div><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?>

                                </div>
                                <div>
                                    <?php echo e(config('config.system.footer_credit')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/marksheet/exam-wise-ghana.blade.php ENDPATH**/ ?>