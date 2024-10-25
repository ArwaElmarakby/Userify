
<?php $__env->startSection('title'); ?>
    edit a post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <form method="post" action="<?php echo e(route('posts.update',['post' => $post->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" name="post_title" value="<?php echo e($post->title); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">content</label>
            <textarea class="form-control" name="post_content" aria-label="With textarea"><?php echo e($post->content); ?></textarea>
        </div>

        <div class="vstack">
            <button type="submit" class="btn btn-primary">update post</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Extra\resources\views/posts/edit.blade.php ENDPATH**/ ?>