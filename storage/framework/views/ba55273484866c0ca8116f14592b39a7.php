<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e(config('config.general.meta_description')); ?>">
    <meta name="keywords" content="<?php echo e(config('config.general.meta_keywords')); ?>">
    <meta name="author" content="<?php echo e(config('config.general.meta_author')); ?>">
    <title><?php echo e(config('config.general.app_name', config('app.name', 'ScriptMint'))); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="icon" href="<?php echo e(config('config.assets.favicon')); ?>" type="image/png">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/site.js', 'resources/css/site.css'], 'site/build'); ?>
</head>

<body class="<?php echo e(config('config.layout.display')); ?> theme-<?php echo e(config('config.system.color_scheme', 'default')); ?>">
    <div class="flex min-h-screen items-center overflow-hidden bg-gray-800">
        <div class="mx-auto w-full max-w-screen-xl px-4 py-4 sm:px-6">
            <div class="rounded-lg bg-gray-200 px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
                <div class="mx-auto max-w-max">
                    <main>
                        <?php echo e($slot); ?>

                    </main>

                    <div class="mt-6 flex justify-center">
                        <a class="flex items-center gap-2 text-sm text-gray-800" href="<?php echo e($url); ?>"><i
                                class="fa-solid fa-arrow-right"></i>
                            <?php echo e($actionText); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/message/layout.blade.php ENDPATH**/ ?>