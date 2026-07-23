<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->first([config('config.print.custom_path') . 'academic.header', 'print.academic.header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <h1 class="heading"><?php echo e($course->name); ?> <?php echo e($course->division->period->name); ?></h1>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($textbooks->count()): ?>
        <h1 class="sub-heading"><?php echo e(trans('academic.book_list.types.textbook')); ?></h1>
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(trans('general.sno')); ?></th>
                    <th><?php echo e(trans('academic.subject.subject')); ?></th>
                    <th><?php echo e(trans('academic.book_list.props.title')); ?></th>
                    <th><?php echo e(trans('academic.book_list.props.publisher')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $textbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $textbook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($textbook->subject?->name); ?></td>
                        <td><?php echo e($textbook->title); ?></td>
                        <td><?php echo e($textbook->publisher); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notebooks->count()): ?>
        <h1 class="sub-heading"><?php echo e(trans('academic.book_list.types.notebook')); ?></h1>
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(trans('general.sno')); ?></th>
                    <th><?php echo e(trans('academic.subject.subject')); ?></th>
                    <th><?php echo e(trans('academic.book_list.props.title')); ?></th>
                    <th><?php echo e(trans('academic.book_list.props.quantity')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $notebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($notebook->subject?->name); ?></td>
                        <td><?php echo e($notebook->title); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notebook->pages): ?>
                                (<?php echo e($notebook->pages); ?>)
                                <?php echo e(trans('academic.book_list.props.pages')); ?>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                        <td><?php echo e($notebook->quantity); ?> <?php echo e(trans('list.unit.pcs')); ?></td>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/academic/book-lists.blade.php ENDPATH**/ ?>