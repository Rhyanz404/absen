<?php $__env->startSection('title', 'Buat Pengumuman'); ?>
<?php $__env->startSection('konten'); ?>
		<div class="col-md-9">
            <form>
            	<label for="Judul">Judul</label>
            	<input type="text" class="form-control" placeholder="Judul" name="Judul">
				<label for="isi">Isi</label>
				<textarea class="form-control" rows="3" name="isi"></textarea>
				<input type="submit" value="POST">
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>