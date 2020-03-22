<div class="container" style="margin-top:10%">
	<div class="card">
		<div class="card-header">
			<h3>Register</h3>
		</div>
		<div class="card-body">
			<?= form_open('User/login_proses'); ?>
			<form action="" method="post">
				<div class="form-group">
				  <label for="username">Username</label>
				  <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Username">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
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