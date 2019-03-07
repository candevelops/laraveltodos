<?php /* D:\laragon\www\todos\resources\views/update.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <hr>

    <div class="row">
        <div class="col-lg-12">
            <h2>Replace your todo with a new one:</h2>
            <form action="<?php echo e(route('todos.save', ['id' => $todo->id ])); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" class="todo form-control input-lg" name="todo" value="<?php echo e($todo->todo); ?>" placeholder="Create a new todo">
            </form>

        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>