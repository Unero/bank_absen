<div class="container" style="margin-top:10%">
	<div class="card">
		<div class="card-header">
			<h3>Register</h3>
		</div>
		<div class="card-body">
			<?= form_open('User/register_proses'); ?>
			<form action="" method="post">
				<div class="form-group">
				  <label for="username">Username</label>
				  <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Username">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
				</div>
				<div class="form-group">
				  <label for="name">Nama</label>
				  <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
				</div>
				<div class="form-group">
				  <label for="address">Alamat</label>
				  <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
				<a href="<?= base_url();?>User/login" class="btn btn-danger ml-2">Login</a>
			</form>
			<?= form_close(); ?>
		</div>
		<div class="card-footer text-muted">
			
		</div>
	</div>
</div>
