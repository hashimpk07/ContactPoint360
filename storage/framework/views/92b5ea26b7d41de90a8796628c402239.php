<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Example formBuilder')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card contactpointHeader">
        <div class="card-body">
            <label for="name"><?php echo e(__('Name')); ?><span style="color:#ff0000">*</span></label>
            <input type="text" id="name" name="name" class="form-control" required /><span id="nameErr" style="display:none;color:red">Name is required</span>
            <div id="fb-editor" style="margin-top: 30px;"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?php echo e(URL::asset('assets/form-builder/form-builder.min.js')); ?>"></script>
    <script>
        jQuery(function($) {
            $(document.getElementById('fb-editor')).formBuilder({
                onSave: function(evt, formData) {
                    console.log(formData);
                    saveForm(formData);
                },
            });
        });

        function saveForm(form) {
            var name = $('#name').val();
            if (name.length < 1) {
                $("#nameErr").css('display', 'block').fadeOut(5000);
                $("#name").focus();
                return false;
            }
            $.ajax({
                type: 'post',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                url: '<?php echo e(URL('save-form-builder')); ?>',
                data: {
                    'form': form,
                    'name': $("#name").val(),
                    "_token": "<?php echo e(csrf_token()); ?>",
                },
                success: function(data) {
                    location.href = "/form-builder";
                    console.log(data);
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\contact360\Laravel12\resources\views/admin/create.blade.php ENDPATH**/ ?>