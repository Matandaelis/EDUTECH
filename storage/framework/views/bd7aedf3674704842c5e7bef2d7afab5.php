<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Report Card</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <style>
        html {
            font-family: "Montserrat", sans-serif;
            font-style: normal;
        }

        .header-bg {
            background-color: #0d3d56;
        }

        .theme-bg-primary {
            background-color: #dce3e8;
        }

        .theme-bg-accent {
            background-color: #b8c9d4;
        }

        .header-text-primary {
            color: #ffffff;
        }

        .text-primary {
            color: #0d3d56;
        }

        .border-color {
            border-color: #b8c9d4;
        }

        .watermark-image {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200px;
            opacity: 0.1;
            transform: translate(-50%, -50%);
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            .header-bg .theme-bg-primary .text-primary .header-text-primary .border-color {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            body {
                padding: 0;
                background-color: white;

            }

            .pdf {
                page-break-after: auto;
            }

            .footer {
                position: relative;
                bottom: 0;
                width: 100%;
            }
        }

        .castle-decoration::before,
        .castle-decoration::after {
            content: "";
            position: absolute;
            top: 0;
            width: 40px;
            height: 10px;
            background: white;
        }

        .castle-decoration::before {
            left: 30px;
        }

        .castle-decoration::after {
            left: 80px;
        }
    </style>
</head>

<body class="bg-gray-100 p-5">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $students->chunk(Arr::get($layout, 'column', 1)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studentPair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-top: <?php echo e(Arr::get($layout, 'margin_top', 0)); ?>mm; page-break-after: always;">
            <div style="display: flex; justify-content: space-between;">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $studentPair; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="width: 205mm; min-height: 292mm" class="relative mx-auto bg-white">
                        <img class="watermark-image" src="<?php echo e(url(config('config.assets.logo'))); ?>" alt="Watermark" />

                        <p class="absolute bottom-1 right-2 text-[10px] font-medium">
                            instikit.com
                        </p>
                        <!-- Header -->
                        <div class="w-full p-5">
                            <div
                                class="header-bg header-text-primary castle-decoration relative flex items-center justify-between border-b border-gray-400 px-3 pb-3 pt-3 text-center">
                                <div class="w-35 flex justify-center text-4xl">
                                    <img src="<?php echo e(url(config('config.assets.logo'))); ?>" alt="School Logo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="text-end">
                                    <h1 class="mb-0 text-xl font-bold tracking-widest">
                                        <?php echo e(config('config.team.config.name')); ?>

                                    </h1>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title1')): ?>
                                        <h5 class="text-sm font-medium"><?php echo e(config('config.team.config.title1')); ?></h5>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title2')): ?>
                                        <h5 class="text-sm font-medium"><?php echo e(config('config.team.config.title2')); ?></h5>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.title3')): ?>
                                        <h5 class="text-sm font-medium"><?php echo e(config('config.team.config.title3')); ?></h5>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <div class="mt-1 flex flex-col gap-1 text-xs">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                                            <h6 class="flex items-center justify-end gap-2">
                                                <span><i class="fa-solid fa-envelope"></i></span>
                                                <span class="font-semibold">Phone
                                                    :</span><?php echo e(config('config.team.config.phone')); ?>

                                            </h6>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.email')): ?>
                                            <h6 class="flex items-center justify-end gap-2">
                                                <span><i class="fa-solid fa-envelope"></i></span>
                                                <span class="font-semibold">Email :</span>
                                                <?php echo e(config('config.team.config.email')); ?>

                                            </h6>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.website')): ?>
                                            <h6 class="flex items-center justify-end gap-2">
                                                <span><i class="fa-solid fa-globe"></i></span>
                                                <span class="font-semibold">Website :</span>
                                                <?php echo e(config('config.team.config.website')); ?>

                                            </h6>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="flex gap-2 p-5">
                            <!-- Left Section -->
                            <div class="flex flex-1 flex-col gap-4 pb-4">
                                <!-- Subject Grading -->
                                <div class="">
                                    <div class="mb-2 flex justify-between border-b-2 border-gray-300 pb-1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($title, 'label')): ?>
                                                <h2
                                                    class="text-color-primary text-primary text-center text-sm font-bold">
                                                    <?php echo e(Arr::get($title, 'label')); ?>

                                                </h2>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <h6 class="text-xs text-gray-600">
                                            <span
                                                class="font-bold"><?php echo e(Arr::get($student->summary, 'result_date')); ?></span>
                                        </h6>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <table class="w-full border-collapse">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $student->marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr
                                                    class="<?php if($loop->first): ?> theme-bg-accent <?php endif; ?> border-b border-gray-200">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td
                                                            class="<?php if(Arr::get($cell, 'type') == 'heading' || Arr::get($cell, 'type') == 'footer'): ?> font-semibold <?php endif; ?> px-3 py-1.5 text-xs">
                                                            <?php echo e(Arr::get($cell, 'label')); ?>

                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Section -->
                            <div class="theme-bg-primary flex w-1/4 flex-col items-center p-4">
                                <div
                                    class="mb-5 flex h-40 w-40 items-center justify-center bg-white text-xs text-white">
                                    <img src="<?php echo e($student->photo_url); ?>" alt="Student Photo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div
                                    class="text-primary border-color mb-2.5 border-b pb-2.5 text-center text-xs font-bold">
                                    <?php echo e($student->name); ?>

                                </div>
                                <div class="text-primary mb-4 text-xs font-semibold">
                                    <?php echo e(Arr::get(App\Enums\Gender::getDetail($student->gender), 'label')); ?> |
                                    <?php echo e(App\ValueObjects\Cal::date($student->birth_date)?->formatted); ?>

                                </div>

                                <div class="mb-8 grid w-full grid-cols-2 gap-1.5">
                                    <div class="border-color border-b pb-1.5 text-[10px]">
                                        <span class="text-xs font-semibold">Course</span> <br />
                                        <?php echo e($student->course_name); ?> <?php echo e($student->batch_name); ?>

                                    </div>
                                    <div class="border-color border-b pb-1.5 text-[10px]">
                                        <span class="text-xs font-semibold">House</span> <br />
                                        Blue House
                                    </div>
                                    <div class="border-color border-b pb-1.5 text-[10px]">
                                        <span class="text-xs font-semibold">Admin No.</span> <br />
                                        <?php echo e($student->code_number); ?>

                                    </div>
                                    <div class="border-color border-b pb-1.5 text-[10px]">
                                        <span class="text-xs font-semibold">Roll No.</span> <br />
                                        <?php echo e($student->roll_number); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="border-t border-gray-300 px-6 py-4">
                            <div class="grid-cols-<?php echo e(count(Arr::get($layout, 'signatories'))); ?> grid gap-10">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = Arr::get($layout, 'signatories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $signatory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <div class="flex flex-col">
                                            <div class="flex h-24 items-center justify-center">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($signatory, 'signature')): ?>
                                                    <img src="<?php echo e(Arr::get($signatory, 'signature')); ?>"
                                                        alt="Teacher Signature" class="w-32 object-cover" />
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                            <p class="text-primary text-center text-xs font-semibold">
                                                <?php echo e(Arr::get($signatory, 'title')); ?>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Arr::get($signatory, 'name')): ?>
                                                    <span
                                                        style="font-weight: normal"><?php echo e(Arr::get($signatory, 'name')); ?></span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</body>

</html>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/marksheet/new.blade.php ENDPATH**/ ?>