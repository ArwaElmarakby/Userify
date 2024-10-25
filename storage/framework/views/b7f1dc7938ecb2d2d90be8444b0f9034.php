<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('successMsg')): ?>
<div class="alert alert-success alert-dismissible fade show">
<p><b><?php echo e(session('successMsg')); ?></b></p>
<button class="btn-close" data-bs-dimiss="alert"></button>
</div>
<?php endif; ?>
<?php if(session('updateMsg')): ?>
<div class="alert alert-success alert-dismissible fade show">
    <p><b><?php echo e(session('updateMsg')); ?></b></p>
    <button class="btn-close" data-bs-dimiss="alert"></button>
</div>
<?php endif; ?>
<?php if(session('deleteMsg')): ?>
<div class="alert alert-danger alert-dismissible fade show">
    <p><b><?php echo e(session('deleteMsg')); ?></b></p>
    <button class="btn-close" data-bs-dimiss="alert"></button>
</div>
<?php endif; ?>

<?php if(!$posts->isEmpty()): ?>
<table class="table table-striped container">
    <thead>
    <tr>
        <!--        <th scope="col">#</th>-->
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">author</th>
        <th scope="col">created_at</th>
        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->title); ?></td>
        <td><?php echo e($post->content); ?></td>
        <td><?php echo e($post->user_id); ?></td>
        <td><?php echo e($post->created_at ? $post->created_at : 'no data'); ?></td>
        <td class="d-flex justify-content-center gap-2">
            <a href="<?php echo e(route('posts.show', ['post' => $post->id])); ?>" class="btn btn-primary">show</a>
            <a href="<?php echo e(route('posts.edit', ['post' => $post->id])); ?>" class="btn btn-warning">edit</a>
            <form method="post" action="<?php echo e(route('posts.destroy', ['post' => $post->id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="d-flex justify-content-center">
    <?php echo e($posts->links('pagination::bootstrap-4')); ?>

</div>
<?php else: ?>
<div class="bg-warning text-center">
    No Posts Found
    <p class="text-danger"><b><a href="<?php echo e(route('posts.create')); ?>">try to create a new post</a></b></p>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Extra\resources\views/posts/index.blade.php ENDPATH**/ ?>