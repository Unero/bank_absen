<?=
	form_open('User/register_ps');
?>
<div class="container mt-5">
	<div class="card">
		<div class="card-header">
			<h3>Registrasi User</h3>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="form-group">
				  <label for="username">Username</label>
				  <input type="username" name="username" id="username" class="form-control" placeholder="Enter your Username">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
				</div>
				<div class="form-group">
				  <label for="nim">NIM</label>
				  <select class="form-control" name="nim" id="nim">
				  <?php foreach($nim as $mhs):?>
						<option value="<?= $mhs['nim']; ?>"><?= $mhs['nim']; ?></option>
					<?php endforeach; ?>
				  </select>
				</div>
				<div class="form-group">
				  <label for="nama">Nama</label>
				  <input type="username" name="nama" id="nama" class="form-control" placeholder="Enter your Username">
				</div>
				<div class="form-group">
				  <label for="kelas">Kelas</label>
				  <select class="form-control" name="kelas" id="kelas">
				  <?php foreach($kelas as $mhs):?>
						<option value="<?= $mhs['kelas']; ?>"><?= $mhs['kelas']; ?></option>
					<?php endforeach; ?>
				  </select>
				</div>
				<button type="submit" class="btn btn-primary mr-2">Register</button>
			</form>
			<a href="<?= base_url();?>User/login" class="btn btn-secondary">Sudah punya akun ?</a>
		</div>
		<?php
		if (isset($pesan)) { ?>
			<div class="card-footer text-muted">
				<div class="alert alert-info" role="alert">
					<p><?= $pesan;?></p>
				</div>
			</div>
			<?php
		} ?>
	</div>
</div>
