<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Daftar Pegawai</center></div>
                <div class="panel-body">
                 <table class="table-bordered">
                     <tr>
                         <th>No</th>
                         <th>NIP</th>
                         <th>Nama</th>
                         <th>Email</th>
                         <th>Jabatan</th>
                         <th>Golongan</th>
                         <th>Photo</th>
                         <th colspan="2">Action</th>
                     </tr>
                     <?php
                     $no=0;
                     ?>

                 </table>   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>