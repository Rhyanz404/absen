<?php $__env->startSection('title', 'Panel Admin '); ?>
<?php $__env->startSection('konten'); ?>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Absen Hari Ini (<?php echo e($hari); ?>)</div>
                <div class="panel-body">
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
                            <?php $__empty_1 = true; $__currentLoopData = $absen_harini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                        <span class="sr-only">Aksi</span>
                                      </button>
                                      <ul class="dropdown-menu btn-sm">
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
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Absen Kemarin</div>
                    <div class="panel-body">
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
                            <?php $__empty_1 = true; $__currentLoopData = $absen_kemarin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absenkemarin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($absenkemarin->user_id); ?></td>
                                        <td><?php echo e($absenkemarin->time_in); ?></td>
                                        <td><?php echo e($absenkemarin->time_out); ?></td>
                                        <td>Aktif</td>
                                        <td>
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Aksi</span>
                                            </button>
                                            <ul class="dropdown-menu btn-sm">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                            </div>
                                            </td>
                                            <td><?php echo e($absenkemarin->note); ?></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>