<div class="container mt-5">
	<h3 class="text-center">Data Absensi</h3>
	<table class="table table-bordered" id="list">
		<thead class="thead-inverse">
			<tr>
				<th scope="col" class="text-center">ID</th>
				<th scope="col" class="text-center">Matkul</th>
				<th scope="col" class="text-center">Dosen</th>
				<th scope="col" class="text-center">Mahasiswa</th>
				<th scope="col" class="text-center">Status</th>
				<th scope="col" class="text-center">Tanggal</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach ($absensi as $absent):?>
				<tr>
					<td scope="row" class="text-center"><?= $absent->id;?></td>
					<td scope="row" class="text-center"><?= $absent->matkul;?></td>
					<td scope="row" class="text-center"><?= $absent->dosen;?></td>
					<td scope="row" class="text-center"><?= $absent->mahasiswa;?></td>
					<td scope="row" class="text-center"><?= $absent->status;?></td>
					<td scope="row" class="text-center"><?= $absent->tanggal;?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
	</table>
	<a href="<?= base_url();?>Admin/save/absensi" class="btn btn-info">Save to Database</a>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#list').DataTable();
	});
</script>
