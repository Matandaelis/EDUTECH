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
                                config('config.print.custom_path') . 'exam.header',
                                'print.exam.header',
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(view()->exists(config('config.print.custom_path') . 'exam.marksheet-subheader')): ?>
                                <?php echo $__env->make(config('config.print.custom_path') . 'exam.marksheet-subheader', [
                                    'titles' => $titles,
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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

                            <table class="mt-2 inner-table cellpadding" width="100%">
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
                                <tr>
                                    <td><?php echo e(trans('student.health_record.props.height')); ?> /
                                        <?php echo e(trans('student.health_record.props.weight')); ?></td>
                                    <td class="text-right"><?php echo e(Arr::get($student->health_record, 'general.height')); ?>cm
                                        / <?php echo e(Arr::get($student->health_record, 'general.weight')); ?>kg
                                    </td>
                                    <td><?php echo e(trans('student.attendance.attendance')); ?></td>
                                    <td class="text-right"><?php echo e(Arr::get($student->attendance, 'present')); ?> /
                                        <?php echo e(Arr::get($student->attendance, 'working_days')); ?></td>
                                </tr>
                            </table>

                            <table class="mt-4 inner-table font-85pc" width="100%">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                    'text-center' => Arr::get($cell, 'align') == 'center',
                                                    'font-110pc' => Arr::get($cell, 'font-size') == 'lg',
                                                    'font-120pc' => Arr::get($cell, 'font-size') == 'xl',
                                                    'py-2' => Arr::get($cell, 'font-size') == 'xl',
                                                    'font-weight-bold' => Arr::get($cell, 'bold'),
                                                ]); ?>"
                                                rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>">
                                                <?php echo e(Arr::get($cell, 'label')); ?>


                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($cell, 'blank')): ?>
                                                    &nbsp;
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->gradingRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                    'text-center' => Arr::get($cell, 'align') == 'center',
                                                    'font-weight-bold' => Arr::get($cell, 'bold'),
                                                ]); ?>"
                                                rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>">
                                                <?php echo e(Arr::get($cell, 'label')); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </table>

                            <table class="mt-4 inner-table font-80pc" width="100%">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->observationRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td colspan="<?php echo e(Arr::get($cell, 'colspan', 1)); ?>"
                                                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                    'text-center' => Arr::get($cell, 'align') == 'center',
                                                    'font-weight-bold' => Arr::get($cell, 'bold'),
                                                ]); ?>"
                                                rowspan="<?php echo e(Arr::get($cell, 'rowspan', 1)); ?>">
                                                <?php echo e(Arr::get($cell, 'label')); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </table>

                            <table class="mt-4" width="100%">
                                <tr>
                                    <td style="width:50%; padding-left:10px;" valign="top">
                                        <div>
                                            <span class="font-weight-bold"><?php echo e(trans('exam.result')); ?>:</span>
                                            <?php echo e(Arr::get($student->comment, 'result')); ?>

                                        </div>
                                        <div class="mt-2">
                                            <span class="font-weight-bold"><?php echo e(trans('exam.comment')); ?>:</span>
                                            <?php echo e(Arr::get($student->comment, 'comment')); ?>

                                        </div>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($params, 'result_date')): ?>
                                            <div class="mt-2">
                                                <span class="font-weight-bold">Date:</span>
                                                <?php echo e(\Cal::date(Arr::get($params, 'result_date'))->formatted); ?>

                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                    <td style="width:50%;">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($params, 'show_grade_detail')): ?>
                                            <h2 class="sub-heading"><?php echo e(trans('exam.grade.grade')); ?></h2>
                                            <table border="1" class="mt-4 table font-90pc">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $grade->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Arr::get($record, 'code')); ?></td>
                                                        <td><?php echo e(Arr::get($record, 'min_score')); ?> -
                                                            <?php echo e(Arr::get($record, 'max_score')); ?></td>
                                                        <td><?php echo e(Arr::get($record, 'label')); ?></td>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </table>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                </tr>
                            </table>

                            <?php echo $__env->first(
                                [config('config.print.custom_path') . 'exam.signatory', 'print.exam.signatory'],
                                ['layout' => $layout, 'margin' => 'mt-32']
                            , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'show_print_date_time')): ?>
                                <div class="mt-4" style="padding-left: 10px; padding-right: 10px;">
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/cumulative-marksheet.blade.php ENDPATH**/ ?>