<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ini apa ya ?</div>

                <div class="panel-body">
                    Login : <strong> Success </strong>
                    <br> 
                    Name : <strong> <?php echo e(Auth::user()->name); ?> </strong>
                    <br>
                    Email : <strong> <?php echo e(Auth::user()->email); ?> </strong>
                    <br>
                    Type of permissions : <strong> <?php echo e(Auth::user()->permission); ?> </strong>
                    <br>
                    Password : <strong> <?php echo e(Auth::user()->password); ?> (Greget :V)</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>