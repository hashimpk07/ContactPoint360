<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Example formBuilder')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card contactpointHeader">
        <div class="card-body">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input type="text" id="name" name="name" class="form-control" />
            <div id="fb-editor" style="margin-top: 30px;"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?php echo e(URL::asset('assets/form-builder/form-builder.min.js')); ?>"></script>
    <script>
        var fbEditor = document.getElementById('fb-editor');
        var formBuilder = $(fbEditor).formBuilder({
            onSave: function(evt, formData) {
                saveForm(formData);
            },
        });

        $(function() {
            $.ajax({
                type: 'get',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '<?php echo e(URL('get-form-builder-edit')); ?>',
                data: {
                    'id': '<?php echo e($id); ?>'
                },
                success: function(data) {
                    $("#name").val(data.name);
                    formBuilder.actions.setData(data.content);
                }
            });
        });

        function saveForm(form) {
            $.ajax({
                type: 'post',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '<?php echo e(URL('update-form-builder')); ?>',
                data: {
                    'form': form,
                    'name': $("#name").val(),
                    'id': <?php echo e($id); ?>,
                    "_token": "<?php echo e(csrf_token()); ?>",
                },
                success: function(data) {
                    location.href = "/form-builder";
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\contact360\Laravel12\resources\views/admin/edit.blade.php ENDPATH**/ ?>