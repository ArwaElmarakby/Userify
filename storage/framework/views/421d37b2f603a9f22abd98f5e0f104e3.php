<?php $__env->startSection('title'); ?>
    create a post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">


    <form method="post" action="<?php echo e(route('posts.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" name="post_title" value="<?php echo e(old('post_title')); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>



        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">content</label>
            <textarea class="form-control" name="post_content" value="<?php echo e(old('post_content')); ?> aria-label="With textarea"></textarea>
        </div>
        <?php $__errorArgs = ['post_content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="vstack">
            <button type="submit" class="btn btn-primary">Add post</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Extra\resources\views/posts/create.blade.php ENDPATH**/ ?>