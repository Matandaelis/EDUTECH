<div x-data="{ open: true }">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('message')): ?>
        <div class="py-2" x-show="open">
            <div class="flex items-center justify-between rounded bg-green-600 px-4 py-2 text-green-50">
                <div class="pr-10"><?php echo e(session('message')); ?></div>
                <i class="fas fa-times cursor-pointer" @click="open = false"></i>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH /home/rancorefrigerati/cloud2.rancorefrigeration.com/resources/views/components/alert.blade.php ENDPATH**/ ?>