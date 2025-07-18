<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Example formBuilder')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card contactpointHeader">
        <div class="card-body">
            <form method="POST" action="<?php echo e(URL('save-form-transaction')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="number" id="form_id" name="form_id" hidden />
                <div id="fb-reader"></div>
                <input type="submit" value="Save" class="btn btn-success" />
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?php echo e(URL::asset('assets/form-builder/form-render.min.js')); ?>"></script>
    <script>
        $(function() {
            $.ajax({
                type: 'get',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '<?php echo e(URL('get-form-builder')); ?>',
                data: {
                    'id': <?php echo e($id); ?>

                },
                success: function(data) {
                    $("#form_id").val(data.id);
                    $('#fb-reader').formRender({
                        formData: data.content
                    });
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\contact360\Laravel12\resources\views/user/read.blade.php ENDPATH**/ ?>