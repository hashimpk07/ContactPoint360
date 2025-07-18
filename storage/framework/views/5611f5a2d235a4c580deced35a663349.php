<!DOCTYPE html>
<html>
    <head>
        <title> ContactPoint 360 </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }
            .navbar-laravel{
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }
            .navbar-brand , .nav-link, .my-form, .login-form{
                font-family: Raleway, sans-serif;

            }
            .my-form{
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .my-form .row{
                margin-left: 0;
                margin-right: 0;
            }
            .login-form{
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .login-form .row{
                margin-left: 0;
                margin-right: 0;
            }
            .contactpoint {
                font-size: 24px; 
                font-weight: bold !important; 
                color: #333; 
                font-family: Arial, sans-serif !important;
            }
            .contactpointHeader{
                margin-left: 30px !important;
                margin-right: 30px !important;;
            }
            .clear-all{
                display: none !important;
            }
            .btn-danger{
                display: none !important;
            }
            .btn-default{
                display: none !important;
            }
            .save-template{
                margin: 10px auto !important; 
                background-color: #2b5115 !important;;
                width: 100px !important;
            }
            .formbuilder-icon-button{
                display: none;
            }
        </style>
    </head>
 
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand contactpoint" href="https://contactpoint360.com/">ContactPoint 360 </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php  if(request()->segment(1)  != 'read-form-builder' ){ ?>
                    <ul class="navbar-nav ml-auto">
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
                        </li>
                    <?php endif; ?>
                    </ul>
                    <?php }  ?>
                </div>
            </div>
        </nav>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                    <div class="content-wrapper">
                        <?php echo $__env->yieldContent('content'); ?>
                        <!-- Footer -->
                        
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
               
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <script src="<?php echo e(URL::asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>

    </body>
   
    <?php echo $__env->yieldContent('script'); ?>

</html>
<?php /**PATH C:\xampp\htdocs\contact360\Laravel12\resources\views/layouts/app.blade.php ENDPATH**/ ?>