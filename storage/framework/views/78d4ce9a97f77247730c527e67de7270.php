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

    <h2 class="heading"><?php echo e(trans('student.registration.registration')); ?></h2>

    <table width="100%">
        <tr>
            <td><img src="<?php echo e(Arr::get($registration, 'contact.photo')); ?>" alt="Photo" width="100" height="auto">
            </td>
            <td class="text-right" valign="top" style="line-height: 1.5;">
                <strong><?php echo e(trans('student.registration.props.code_number')); ?>:
                    <?php echo e(Arr::get($registration, 'code_number')); ?></strong> <br />
                <strong><?php echo e(trans('student.registration.props.date')); ?>:
                    <?php echo e(Arr::get($registration, 'date.formatted')); ?></strong><br />
                <strong><?php echo e(trans('academic.period.period')); ?>:
                    <?php echo e(Arr::get($registration, 'period.name')); ?></strong><br />
                <strong><?php echo e(trans('academic.course.course')); ?>:
                    <?php echo e(Arr::get($registration, 'course.name')); ?></strong><br />
                <strong><?php echo e(trans('student.enrollment_type.enrollment_type')); ?>:
                    <?php echo e(Arr::get($registration, 'enrollment_type.name')); ?></strong>
            </td>
        </tr>
    </table>

    <table class="mt-4 table" style="table-layout: fixed;">
        <tr>
            <th><?php echo e(trans('student.registration.props.stage')); ?></th>
            <td><?php echo e(Arr::get($registration, 'stage.name')); ?></td>
            <th><?php echo e(trans('student.registration.props.assigned_to')); ?></th>
            <td><?php echo e(Arr::get($registration, 'employee.name')); ?></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.name')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.name')); ?></td>
            <th><?php echo e(trans('contact.props.contact_number')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.contact_number')); ?></td>
            <th><?php echo e(trans('contact.props.email')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.email')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.alternate_contact_number')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.alternate_records.contact_number')); ?>

            <th><?php echo e(trans('contact.props.alternate_email')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.alternate_records.email')); ?></td>
            </td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.birth_date')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.birth_date.formatted')); ?></td>
            <th><?php echo e(trans('contact.props.gender')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.gender.label')); ?></td>
            <th><?php echo e(trans('contact.props.locality')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.locality.label')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.category.category')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.category.name')); ?></td>
            <th><?php echo e(trans('contact.caste.caste')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.caste.name')); ?></td>
            <th><?php echo e(trans('contact.religion.religion')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.caste.name')); ?></td>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.student.enable_unique_id_fields')): ?>
            <tr>
                <th><?php echo e(config('config.student.unique_id_number1_label')); ?></th>
                <td><?php echo e(Arr::get($registration, 'contact.unique_id_number1')); ?></td>
                <th><?php echo e(config('config.student.unique_id_number2_label')); ?></th>
                <td><?php echo e(Arr::get($registration, 'contact.unique_id_number2')); ?></td>
                <th><?php echo e(config('config.student.unique_id_number3_label')); ?></th>
                <td><?php echo e(Arr::get($registration, 'contact.unique_id_number3')); ?></td>
            </tr>
            <tr>
                <th><?php echo e(config('config.student.unique_id_number4_label')); ?></th>
                <td><?php echo e(Arr::get($registration, 'contact.unique_id_number4')); ?></td>
                <th><?php echo e(config('config.student.unique_id_number5_label')); ?></th>
                <td><?php echo e(Arr::get($registration, 'contact.unique_id_number5')); ?></td>
                <th></th>
                <td></td>
            </tr>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <tr>
            <th><?php echo e(trans('contact.props.birth_place')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.birth_place')); ?></td>
            <th><?php echo e(trans('contact.props.nationality')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.nationality')); ?></td>
            <th><?php echo e(trans('contact.props.mother_tongue')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.mother_tongue')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.blood_group')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.blood_group.label')); ?></td>
            <th><?php echo e(trans('contact.props.marital_status')); ?></th>
            <td><?php echo e(Arr::get($registration, 'contact.marital_status.label')); ?></td>
            <th>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($registration, 'custom_fields', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e(Arr::get($customField, 'label')); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </th>
            <td>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($registration, 'custom_fields', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e(Arr::get($customField, 'formatted_value')); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.present_address')); ?></th>
            <td style="max-width: 20%;"><?php echo e(Arr::get($registration, 'contact.present_address_display')); ?></td>
            <th><?php echo e(trans('contact.props.permanent_address')); ?></th>
            <td style="max-width: 20%;"><?php echo e(Arr::get($registration, 'contact.permanent_address_display')); ?></td>
            <th></th>
            <td></td>
        </tr>
    </table>

    <h2 class="sub-heading"><?php echo e(trans('guardian.guardian')); ?></h2>

    <table class="mt-4 table">
        <tr>
            <th><?php echo e(trans('contact.props.name')); ?></th>
            <th><?php echo e(trans('contact.props.relation')); ?></th>
            <th><?php echo e(trans('contact.props.contact_number')); ?></th>
            <th><?php echo e(trans('contact.props.occupation')); ?></th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($registration, 'contact.guardians', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guardian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(Arr::get($guardian, 'contact.name')); ?></td>
                <td><?php echo e(Arr::get($guardian, 'relation.label')); ?></td>
                <td><?php echo e(Arr::get($guardian, 'contact.contact_number')); ?></td>
                <td><?php echo e(Arr::get($guardian, 'contact.occupation')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>

    <h2 class="sub-heading"><?php echo e(trans('student.qualification.qualification')); ?></h2>

    <table class="mt-4 table">
        <tr>
            <th><?php echo e(trans('academic.course.course')); ?></th>
            <th><?php echo e(trans('student.qualification_level.qualification_level')); ?></th>
            <th><?php echo e(trans('student.qualification.props.institute')); ?></th>
            <th><?php echo e(trans('general.period')); ?></th>
            <th><?php echo e(trans('student.qualification.props.result')); ?></th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($registration, 'contact.qualifications', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(Arr::get($qualification, 'course')); ?> <span
                        class="font-90pc"><?php echo e(Arr::get($qualification, 'session')); ?></span></td>
                <td><?php echo e(Arr::get($qualification, 'level.name')); ?></td>
                <td><?php echo e(Arr::get($qualification, 'institute')); ?></td>
                <td><?php echo e(Arr::get($qualification, 'period')); ?></td>
                <td><?php echo e(Arr::get($qualification, 'result.label')); ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($qualification, 'result.value') == 'pass'): ?>
                        (<?php echo e(Arr::get($qualification, 'percentage')); ?>%)
                    <?php elseif(Arr::get($qualification, 'result.value') == 'reappear'): ?>
                        <span class="text-red-500">(<?php echo e(Arr::get($qualification, 'failed_subjects')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>

    <h2 class="sub-heading"><?php echo e(trans('student.document.document')); ?></h2>

    <table class="mt-4 table">
        <tr>
            <th><?php echo e(trans('student.document_type.document_type')); ?></th>
            <th><?php echo e(trans('student.document.props.title')); ?></th>
            <th><?php echo e(trans('student.document.props.number')); ?></th>
            <th><?php echo e(trans('student.document.props.issue_date')); ?></th>
            <th><?php echo e(trans('student.document.props.start_date')); ?></th>
            <th><?php echo e(trans('student.document.props.end_date')); ?></th>
        </tr>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($registration, 'contact.documents', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(Arr::get($document, 'type.name')); ?></td>
                <td><?php echo e(Arr::get($document, 'title')); ?></td>
                <td><?php echo e(Arr::get($document, 'number')); ?></td>
                <td><?php echo e(Arr::get($document, 'issue_date.formatted')); ?></td>
                <td><?php echo e(Arr::get($document, 'start_date.formatted')); ?></td>
                <td><?php echo e(Arr::get($document, 'end_date.formatted')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </table>

    <div class="mt-8">
        <p class="text-right"><?php echo e(trans('print.authorized_signatory')); ?></p>
    </div>
    <div class="mt-4">
        <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?>

        </p>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/registration.blade.php ENDPATH**/ ?>