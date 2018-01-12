<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informasi : <?php echo e($info['status']); ?></div>

                <div class="panel-body">
<!--                     <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?> -->
                    <!-- <table class="table table-responsive"> -->
                        <form action="/home" method="post">
                            <?php echo e(csrf_field()); ?>

                            <input type="text" class="form-control" placeholder="Keterangan . . " name="note">
                            <button type="submit" class="btn btn-flat btn-primary <?php echo e($info['btnInstts']); ?>" name="btnIn" value="a" <?php echo e($info['btnIn']); ?> >ABSEN MASUK</button>
                            <button type="submit" class="btn btn-flat btn-primary  <?php echo e($info['btnOutstts']); ?>" name="btnOut" value="b" <?php echo e($info['btnOut']); ?>>ABSEN KELUAR</button>
                        </form>
                            <a href="home/logout" class="btn btn-flat btn-primary" name="btnOut" value="b"> KELUAR</a>

                    <!-- </table> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat Absen</div>

                <div class="panel-body">
<!--                     <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?> -->

                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($absen->date); ?></td>
                                <td><?php echo e($absen->time_in); ?></td>
                                <td><?php echo e($absen->time_out); ?></td>
                                <td><?php echo e($absen->note); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td>Tidak Ada Data</td>
                            </tr>
                            <?php endif; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>