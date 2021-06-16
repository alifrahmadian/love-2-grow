

<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()): ?>
        <div class="container">
            <h1 class="text-center mt-5">Selamat Datang <?php echo e(Auth::user()->name); ?></h1>
        </div>
    <?php else: ?>
        <h1 class="text-center mt-5">Account not found! Please login</h1>
    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive - Bina Nusantara University\College Life\Skripsi\Skripsi\Apps\love-2-grow-clinic\resources\views/member.blade.php ENDPATH**/ ?>