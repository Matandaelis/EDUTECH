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
    <div style="margin-top: 20px; page-break-after: always;">
        <div style="display: flex; justify-content: space-between;">
            <div style="margin-bottom:10px; width: <?php echo e(Arr::get($layout, 'box_width')); ?>; border: 1px solid black;">

                <div class="<?php echo e(Arr::get($layout, 'watermark') ? 'watermark-container' : ''); ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'watermark')): ?>
                        <img class="watermark-image" src="<?php echo e(url(config('config.assets.logo'))); ?>">
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php echo $__env->first([
                        config('config.print.custom_path') . 'exam.admit-card.header',
                        'print.exam.admit-card.header',
                    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


                    <h2 class="heading"><?php echo e(trans('exam.admit_card.admit_card')); ?></h2>

                    <div style="padding: 10px 15px;">
                        <table class="mt-2" width="100%">
                            <tr>
                                <td valign="top">
                                    <table width="90%" cellspacing="4" cellpadding="0">
                                        <tr>
                                            <td class="font-weight-bold"><?php echo e(trans('student.props.name')); ?>

                                            </td>
                                            <td class="text-right"><?php echo e($student->name); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                <?php echo e(trans('student.roll_number.roll_number')); ?></td>
                                            <td class="text-right"><?php echo e($student->roll_number); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                <?php echo e(trans('contact.props.father_name')); ?></td>
                                            <td class="text-right"><?php echo e($student->father_name); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">
                                                <?php echo e(trans('academic.course.course')); ?>

                                            </td>
                                            <td class="text-right">
                                                <?php echo e($student->course_name . ' ' . $student->batch_name); ?>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="top">
                                    <table class="table" width="100%" border="1" cellspacing="4" cellpadding="0">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'show_sno')): ?>
                                                    <td><?php echo e($loop->index + 1); ?></td>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <td><?php echo e(Arr::get($record, 'subject.name')); ?></td>
                                                <td><?php echo e(Arr::get($record, 'subject.code')); ?></td>
                                                <td>
                                                    <?php echo e(Arr::get($record, 'date')?->formatted); ?>

                                                    <br />
                                                    <small><?php echo e(Arr::get($record, 'start_time')?->formatted); ?>

                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($record, 'duration')): ?>
                                                            -
                                                            <?php echo e(Arr::get($record, 'end_time')?->formatted); ?>

                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </small>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <?php echo $__env->first(
                            [config('config.print.custom_path') . 'exam.signatory', 'print.exam.signatory'],
                            ['layout' => $layout, 'margin' => 'mt-4']
                        , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($layout, 'show_print_date_time')): ?>
                            <div class="mt-4">
                                <p><?php echo e(trans('general.printed_at')); ?>:
                                    <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/exam-form-admit-card.blade.php ENDPATH**/ ?>