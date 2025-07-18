<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Form Builder')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card contactpointHeader">
        <div class="card-body">
            <a href="<?php echo e(URL('formbuilder')); ?>" class="btn btn-success"><?php echo e(__('Create Forms')); ?></a>
           
            <?php if(count($forms) > 0): ?>
            <table class="table" style="margin-top:30px !important";>
                <thead>
                    <th><?php echo e(__('Name')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="width: 85%;" ><?php echo e($form->name); ?></td>
                            <td>
                                <a href="<?php echo e(URL('edit-form-builder', $form->id)); ?>" class="btn btn-primary"><?php echo e(__('Edit')); ?></a>

                                <!--<a href="<?php echo e(URL('read-form-builder', $form->id)); ?>" class="btn btn-primary"><?php echo e(__('Show')); ?></a> -->

                                <form method="POST" action="<?php echo e(URL('form-delete', $form->id)); ?>" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this product?')"><?php echo e(__('Delete')); ?></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php else: ?> 
            <img src="<?php echo e(url('/images/norecordfound.png')); ?>" class="no-data-found" style="width: 100%;margin-top: 25px;" />
    
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\contact360\Laravel12\resources\views/admin/index.blade.php ENDPATH**/ ?>