<nav class="navbar navbar-expand navbar-light bg-light">
	<div class="container">
	<a class="navbar-brand" href="<?= base_url();?>Home">💳 Bank Absen</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="<?= base_url();?>Admin/index"><u>User</u></a>
			<a class="nav-item nav-link" href="<?= base_url();?>Admin/absensi"><u>Absensi</u></a>
			<a class="nav-item nav-link" href="<?= base_url();?>Admin/mahasiswa"><u>Mahasiswa</u></a>
			<a class="nav-item nav-link" href="<?= base_url();?>Admin/barang"><u>Barang</u></a>
		</div>
		<div class="navbar-nav ml-auto">
			<!-- <a class="nav-item nav-link" href="<?= base_url();?>User/logout">Hi</a> -->
			<a class="nav-item nav-link" href="<?= base_url();?>User/logout">Logout</a>
		</div>
	</div>
	</div>
</nav>
