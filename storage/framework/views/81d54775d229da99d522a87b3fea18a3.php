<?php $__env->startSection('title'); ?>
single post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card text-bg-dark">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($post->title); ?></h5>
            <hr>
            <p class="card-text"><?php echo e($post->content); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Extra\resources\views/posts/show.blade.php ENDPATH**/ ?>