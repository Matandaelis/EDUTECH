<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Billdesk Test Payment</title>
    <?php echo $__env->make('gateways.assets.billdesk', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            var flowConfig = {
                merchantId: "<?php echo e($merchantId); ?>",
                bdOrderId: "<?php echo e($bdOrderId); ?>",
                authToken: "<?php echo e($authToken); ?>",
                childWindow: <?php echo e($childWindow ? 'true' : 'false'); ?>,
                returnUrl: "<?php echo e($returnUrl); ?>",
            };

            var responseHandler = function(txn) {
                console.log("callback received status:: ", txn.status);
                console.log("callback received response:: ", txn.response);
            };

            var config = {
                responseHandler: responseHandler,
                merchantLogo: 'https://scriptmint.com/images/logo-light.png',
                flowConfig: flowConfig,
                flowType: "payments",
            };

            window.loadBillDeskSdk(config);
        });
    </script>
</body>


</html>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/gateways/test/billdesk.blade.php ENDPATH**/ ?>