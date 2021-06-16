<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="registration-card w-50 ">
        <form class="align-self-center mb-4 w-100" action="<?php echo e(ROUTE('login')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <p class="text-center">Belum punya akun? Silakan <a href="/register">buat akun</a> terlebih dahulu</p>

            <div class="registerButtonWrapper mb-5 text-center">
                <button class="button mb-2 reg-submit-button" type="submit">Login</button>
            </div>
        </form>
    </div>
    


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive - Bina Nusantara University\College Life\Skripsi\Skripsi\Apps\love-2-grow-clinic\resources\views/auth/login.blade.php ENDPATH**/ ?>