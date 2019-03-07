<?php /* D:\laragon\www\todos\resources\views/todos.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <hr>

    <div class="row">
        <div class="col-lg-12 col-lg-offset-3">

            <form action="/create/todo" method="post">

                <?php echo e(csrf_field()); ?>

                <h2>Feel free to add a new todo here:</h2>
                <input type="text" class="todo form-control-lg" name="todo" placeholder="Create a new todo">
        
            </form>
            </br>

        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12 col-lg-offset-3">
            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($todo->todo); ?> <a href="<?php echo e(route('todo.delete', ['id' => $todo->id])); ?>" class="btn btn-danger"> x </a>
                <a href="<?php echo e(route('todo.update', ['id' => $todo->id])); ?>" class="btn btn-info btn-xs"> update </a>

                <?php if(!$todo->completed): ?>

                <a href="<?php echo e(route('todos.completed', [ 'id' => $todo->id])); ?>" class="btn btn-xs btn-success">Mark as completed</a>

                <?php else: ?>

                <span class="text-success">Completed!</span>

                <?php endif; ?>

                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>