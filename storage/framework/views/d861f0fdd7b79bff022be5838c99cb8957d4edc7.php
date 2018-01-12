<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Admin Panel</div>

                <div class="panel-body">
                    <ul class="list-group">
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Daftar Karyawan Baru</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Data Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Tulis Pengumuman</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Riwayat Gaji Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Setting Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Atur Waktu Libur</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Slip Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-flat btn-primary btn-sm" name="btnOut" value="b" > KELUAR</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Karyawan</div>

                <div class="panel-body">
<!--                     <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?> -->

                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $data_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($absen->user_id); ?></td>
                                <td><?php echo e($absen->time_in); ?></td>
                                <td><?php echo e($absen->time_out); ?></td>
                                <td>Aktif</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-danger">Action</button>
                                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                      </ul>
                                    </div>
                                </td>
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