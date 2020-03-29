<div class="container mt-5">
	<h3 class="text-center">Data Mahasiswa</h3>
	<a href="<?= base_url();?>mahasiswa/add" class="btn btn-primary">Create</a>
	<table class="table table-bordered" id="list">
		<thead class="thead-inverse">
			<tr>
				<th scope="col" class="text-center">NIM</th>
				<th scope="col" class="text-center">Nama</th>
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
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#list').DataTable();
	});
</script>
