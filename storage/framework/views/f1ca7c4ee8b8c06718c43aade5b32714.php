<div style="padding: 10px 15px;">
    <table width="100%" border="0">
        <tr>
            <td width="33%" valign="top">
                <img src="<?php echo e(url(config('config.assets.logo'))); ?>" style="max-width: 150px;" />
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
                <div class="mt-1 text-right">
                    <span><?php echo e(Arr::toAddress([
                        'address_line1' => config('config.team.config.address_line1'),
                        'address_line2' => config('config.team.config.address_line2'),
                        'city' => config('config.team.config.city'),
                        'state' => config('config.team.config.state'),
                        'zip_code' => config('config.team.config.zip_code'),
                        'country' => config('config.team.config.country'),
                    ])); ?></span>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.phone')): ?>
                    <div class="mt-1 text-right">
                        <span><?php echo e(config('config.team.config.phone')); ?></span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.email')): ?>
                    <div class="mt-1 text-right">
                        <span><?php echo e(config('config.team.config.email')); ?></span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('config.team.config.website')): ?>
                    <div class="mt-1 text-right"><?php echo e(config('config.team.config.website')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </td>
        </tr>
    </table>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/print/exam/marksheet/header.blade.php ENDPATH**/ ?>