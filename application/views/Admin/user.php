<div class="container mt-5">
	<table class="table table-bordered" id="listUser">
		<thead class="thead-inverse">
			<tr>
				<th scope="col" class="text-center">Username</th>
				<th scope="col" class="text-center">Password</th>
				<th scope="col" class="text-center">NIM</th>
				<th scope="col" class="text-center">Nama</th>
				<th scope="col" class="text-center">Kelas</th>
				<th scope="col" class="text-center">Type</th>
				<th scope="col" class="text-center">Status</th>
				<th scope="col" class="text-center">Action</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user):?>
				<tr>
					<td scope="row" class="text-center"><?= $user->username;?></td>
					<td scope="row" class="text-center"><?= $user->password;?></td>
					<td scope="row" class="text-center"><?= $user->nim;?></td>
					<td scope="row" class="text-center"><?= $user->nama;?></td>
					<td scope="row" class="text-center"><?= $user->kelas;?></td>
					<td scope="row" class="text-center"><?= $user->type;?></td>
					<td scope="row" class="text-center"><?= $user->status;?></td>
					<td scope="row" class="text-center">
						<a href="<?= base_url();?>Admin/activate/<?= $user->id;?>" class="btn btn-info mr-2">🔓 Aktifkan</a>
						<a href="<?= base_url();?>Admin/disable/<?= $user->id;?>" class="btn btn-danger">🔏 Disable</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#listUser').DataTable();
	});
</script>
