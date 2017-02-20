<?php $__env->startSection('content'); ?>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-head">
            <div class="table-responsive table-border">
    <h1>Create Book</h1>
    <?php echo Form::model($jabatan,['method' => 'PATCH','route'=>['jabatan.update',$jabatan->id]]); ?>

    <div class="form-group">
        <?php echo Form::label('kode jabatan', 'kode jabatan :'); ?>

        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('nama jabatan ', 'nama jabatan:'); ?>

        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('besaran uang', 'besaran udang :'); ?>

        <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

    </div>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>