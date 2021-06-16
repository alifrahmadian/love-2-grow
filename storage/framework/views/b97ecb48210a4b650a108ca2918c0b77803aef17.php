<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>" type="text/css">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Montserrat+Alternates&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <title>Love2Grow Clinic</title>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldContent('content'); ?>
        
    <?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive - Bina Nusantara University\College Life\Skripsi\Skripsi\Apps\love-2-grow-clinic\resources\views/layouts/app.blade.php ENDPATH**/ ?>