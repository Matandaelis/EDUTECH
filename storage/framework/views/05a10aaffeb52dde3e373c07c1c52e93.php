<?php if (isset($component)) { $__componentOriginalc5b070edbb87e9023b50717f50849ddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5b070edbb87e9023b50717f50849ddf = $attributes; } ?>
<?php $component = App\View\Components\Print\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('print.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Print\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'centered']); ?>
    <table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td width="33%" valign="top">
                <img src="<?php echo e(config('config.assets.logo')); ?>" width="150" />
            </td>
            <td valign="top" align="right">
                <div class="heading text-right"><?php echo e(config('config.team.config.name')); ?></div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title1')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title1')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title2')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title2')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title3')): ?>
                    <div class="sub-heading mt-1 text-right"><?php echo e(config('config.team.config.title3')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.email') || config('config.team.config.phone')): ?>
                    <div class="mt-1 text-right">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                            <span><?php echo e(config('config.team.config.email')); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                            <span><?php echo e(config('config.team.config.phone')); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.website')): ?>
                    <div class="mt-1 text-right"><?php echo e(config('config.team.config.website')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2 class="heading text-center">
                    <?php echo e(trans('student.online_registration.application')); ?>

                </h2>
                <p class="text-center"><?php echo e($registration->course->division?->program?->name); ?>

                    <?php echo e($registration->period->name); ?>

                </p>
                <p class="text-center font-110pc">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($registration->status->value == 'rejected'): ?>
                        <span style="color: red;">(<?php echo e(trans('student.registration.statuses.rejected')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($registration->status->value == 'pending'): ?>
                        <span style="color: orange;">(<?php echo e(trans('student.registration.statuses.pending')); ?>)</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </p>
            </td>
        </tr>
    </table>
    <table class="mt-2" width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td width="50%" valign="top">
                <div class="sub-heading-left"><?php echo e(trans('student.online_registration.application_number')); ?>:
                    <?php echo e($registration->getMeta('application_number')); ?></div>
            </td>
            <td width="50%" valign="top">
                <div class="sub-heading text-right"><?php echo e(trans('student.registration.props.date')); ?>:
                    <?php echo e($registration->date->formatted); ?></div>
            </td>
        </tr>
    </table>

    <table class="mt-2 table" width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <th><?php echo e(trans('contact.props.name')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->name); ?></td>
            <th><?php echo e(trans('contact.props.contact_number')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->contact_number); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.email')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->email); ?></td>
            <th><?php echo e(trans('contact.props.gender')); ?></th>
            <td class="text-right"><?php echo e(App\Enums\Gender::getDetail($registration->contact->gender)['label'] ?? ''); ?>

            </td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.birth_date')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->birth_date->formatted); ?></td>
            <th><?php echo e(trans('contact.props.birth_place')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->birth_place); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.father_name')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->father_name); ?></td>
            <th><?php echo e(trans('contact.props.mother_name')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->mother_name); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('academic.program.program')); ?></th>
            <td class="text-right"><?php echo e($registration->course->division?->program?->name); ?></td>
            <th><?php echo e(trans('academic.period.period')); ?></th>
            <td class="text-right"><?php echo e($registration->period->name); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('academic.course.course')); ?></th>
            <td class="text-right"><?php echo e($registration->course->name); ?></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.nationality')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->nationality); ?></td>
            <th><?php echo e(trans('contact.props.mother_tongue')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->mother_tongue); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.blood_group')); ?></th>
            <td class="text-right">
                <?php echo e(App\Enums\BloodGroup::getDetail($registration->contact->blood_group)['label'] ?? ''); ?>

            </td>
            <th><?php echo e(trans('contact.props.marital_status')); ?></th>
            <td class="text-right">
                <?php echo e(App\Enums\MaritalStatus::getDetail($registration->contact->marital_status)['label'] ?? ''); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.category.category')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->category?->name); ?></td>
            <th><?php echo e(trans('contact.caste.caste')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->caste?->name); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.religion.religion')); ?></th>
            <td class="text-right"><?php echo e($registration->contact->religion?->name); ?></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.alternate_contact_number')); ?></th>
            <td class="text-right"><?php echo e(Arr::get($registration->contact->alternate_records, 'contact_number')); ?></td>
            <th><?php echo e(trans('contact.props.alternate_email')); ?></th>
            <td class="text-right"><?php echo e(Arr::get($registration->contact->alternate_records, 'email')); ?></td>
        </tr>
        <tr>
            <th><?php echo e(trans('contact.props.present_address')); ?></th>
            <td class="text-right"><?php echo e(Arr::toAddress($registration->contact->present_address)); ?></td>
            <th><?php echo e(trans('contact.props.permanent_address')); ?></th>
            <td class="text-right"><?php echo e(Arr::toAddress($registration->contact->permanent_address)); ?></td>
        </tr>
    </table>

    <div class="mt-4">
        <p><?php echo e(trans('general.printed_at')); ?>: <?php echo e(\Cal::dateTime(now())->formatted); ?></p>
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
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/student/online-registration.blade.php ENDPATH**/ ?>