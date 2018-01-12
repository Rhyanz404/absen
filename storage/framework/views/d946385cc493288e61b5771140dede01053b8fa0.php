<?php $__env->startSection('title', 'Mendaftar Karyawan'); ?>
<?php $__env->startSection('konten'); ?>
		<div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Karyawan</div>

                <div class="panel-body">
			<form class="container" id="needs-validation" novalidate>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom01">Nama Lengkap</label>
			      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom02">NO KTP</label>
			      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom03">Agama</label>
			      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Harus Di Isi
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom04">Jenis Kelamin</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>

			  </div>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom03">Tanggal Lahir</label>
			      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom04">Alamat</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
			    
			  </div>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom03">Jabatan</label>
			      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom04">Tunjangan Status</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
				</div>
			    
			  <button class="btn btn-primary" type="submit">Submit form</button>
			</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("needs-validation");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>