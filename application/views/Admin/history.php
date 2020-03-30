<div class="container mt-5">
	<h3 class="text-center">History penukaran point</h3>
	<table class="table table-bordered" id="list">
		<thead class="thead-inverse">
			<tr>
				<th scope="col" class="text-center">Username</th>
				<th scope="col" class="text-center"></th>
				<th scope="col" class="text-center">Kelas</th>
				<th scope="col" class="text-center">Jurusan</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach ($mahasiswa as $mhs):?>
				<tr>
					<td scope="row" class="text-center"><?= $mhs->nim;?></td>
					<td scope="row" class="text-center"><?= $mhs->nama_mhs;?></td>
					<td scope="row" class="text-center"><?= $mhs->kelas;?></td>
					<td scope="row" class="text-center"><?= $mhs->jurusan;?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
	</table>
	<a href="<?= base_url();?>Admin/save/mahasiswa" class="btn btn-info">Save to Database</a>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#list').DataTable();
	});
</script>
