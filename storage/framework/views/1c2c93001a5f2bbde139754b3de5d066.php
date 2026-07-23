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
                                config('config.print.custom_path') . 'exam.header-default',
                                'print.exam.header-default',
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
                                <thead>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="<?php echo e(Arr::get($item, 'class')); ?>"
                                                rowspan="<?php echo e(Arr::get($item, 'rowspan', 1)); ?>"
                                                colspan="<?php echo e(Arr::get($item, 'colspan', 1)); ?>">
                                                <?php echo e(Arr::get($item, 'label')); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td class="<?php echo e(Arr::get($item, 'class')); ?> <?php if(Arr::get($item, 'align') == 'center'): ?> ' text-center' <?php endif; ?>"
                                                    rowspan="<?php echo e(Arr::get($item, 'rowspan', 1)); ?>"
                                                    colspan="<?php echo e(Arr::get($item, 'colspan', 1)); ?> ">
                                                    <?php echo e(Arr::get($item, 'label')); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="<?php echo e(Arr::get($item, 'class')); ?>"
                                                rowspan="<?php echo e(Arr::get($item, 'rowspan', 1)); ?>"
                                                colspan="<?php echo e(Arr::get($item, 'colspan', 1)); ?>">
                                                <?php echo e(Arr::get($item, 'label')); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                </tfoot>
                            </table>

                            <table class="mt-4 inner-table cellpadding" width="100%">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->grading_marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td <?php if($loop->first): ?> width="40%" <?php endif; ?>
                                                class="<?php echo e(Arr::get($item, 'class')); ?>"
                                                rowspan="<?php echo e(Arr::get($item, 'rowspan', 1)); ?>"
                                                colspan="<?php echo e(Arr::get($item, 'colspan', 1)); ?>">
                                                <?php echo e(Arr::get($item, 'label')); ?>

                                            </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </table>

                            <table class="mt-4 inner-table cellpadding" width="100%">
                                <tr>
                                    <td width="40%"><?php echo e(trans('exam.total')); ?></td>
                                    <td class="text-center"><?php echo e($student->total); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('exam.result_grade')); ?></td>
                                    <td class="text-center"><?php echo e($student->grade); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('exam.percentage')); ?></td>
                                    <td class="text-center"><?php echo e($student->percentage); ?> %</td>
                                </tr>
                                <tr>
                                    <td><?php echo e(trans('exam.result')); ?></td>
                                    <td class="text-center"><?php echo e($student->result); ?></td>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/marksheet.blade.php ENDPATH**/ ?>