<?php /* D:\laragon\www\todos\resources\views/welcome.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <h1>Welcome Back Cynthia</h1>
    <a href="/todos">Here are your tasks for today</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>