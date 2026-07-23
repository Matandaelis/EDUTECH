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
                    <div style="width: <?php echo e(Arr::get($layout, 'box_width')); ?>; border: 1px solid black;">

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

                            <table class="mt-4 inner-table cellpadding" width="100%">
                                <tr>
                                    <td><?php echo e(trans('student.props.name')); ?></td>
                                    <td class="text-right"><?php echo e($student->name); ?></td>
                                    <td><?php echo e(trans('contact.props.birth_date')); ?></td>
                                    <td class="text-right"><?php echo e(\Cal::date($student->birth_date)->formatted); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('student.admission.props.code_number')); ?></td>
                                    <td class="text-right"><?php echo e($student->code_number); ?></td>
                                    <td><?php echo e(trans('student.roll_number.roll_number')); ?></td>
                                    <td class="text-right"><?php echo e($student->roll_number); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('contact.props.father_name')); ?></td>
                                    <td class="text-right"><?php echo e($student->father_name); ?></td>
                                    <td><?php echo e(trans('contact.props.mother_name')); ?></td>
                                    <td class="text-right"><?php echo e($student->mother_name); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('academic.course.course')); ?></td>
                                    <td class="text-right"><?php echo e($student->course_name . ' ' . $student->batch_name); ?>

                                    </td>
                                    <td><?php echo e(trans('contact.props.contact_number')); ?></td>
                                    <td class="text-right"><?php echo e($student->contact_number); ?></td>
                                </tr>
                            </table>

                            <table class="mt-4 inner-table cellpadding" width="100%">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($student->grading_marks): ?>
                                <table class="mt-4 inner-table cellpadding" width="100%">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->grading_marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($student->observation_marks): ?>
                                <table class="mt-4 inner-table cellpadding" width="100%">
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
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <table class="mt-4 inner-table cellpadding" width="100%">
                                <tr>
                                    <td>Total Marks</td>
                                    <td><?php echo e(Arr::get($student->summary, 'total')); ?></td>
                                </tr>
                                <tr>
                                    <td>Obtained Marks</td>
                                    <td><?php echo e(Arr::get($student->summary, 'obtained')); ?></td>
                                </tr>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($student->summary, 'result.label') == 'Fail'): ?>
                                    <tr>
                                        <td>Percentage</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Grade</td>
                                        <td>E</td>
                                    </tr>
                                <?php else: ?>
                                    <tr>
                                        <td>Percentage</td>
                                        <td><?php echo e(Arr::get($student->summary, 'percentage')); ?>%</td>
                                    </tr>
                                    <tr>
                                        <td>Grade</td>
                                        <td><?php echo e(Arr::get($student->summary, 'grade')); ?></td>
                                    </tr>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <tr>
                                    <td>Result</td>
                                    <td><?php echo e(Arr::get($student->summary, 'result.label')); ?></td>
                                </tr>
                            </table>

                            <?php echo $__env->first(
                                [config('config.print.custom_path') . 'exam.signatory', 'print.exam.signatory'],
                                ['layout' => $layout, 'margin' => 'mt-32']
                            , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'show_print_date_time')): ?>
                                <div class="mt-4" style="padding-left: 10px;">
                                    <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?>

                                    </p>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/marksheet/term-wise.blade.php ENDPATH**/ ?>