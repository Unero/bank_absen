<div class="container mt-5">
	<div class="row">
		<div class="col-lg-12">
			<?php echo $this->session->flashdata('hasil'); ?>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr>
						<th>ID</th>
						<th>Matkul</th>
						<th>Dosen</th>
						<th>Mahasiswa</th>
						<th>Status</th>
						<th>Tanggal</th>
					</tr>
					</thead>
					<tbody>
						<?php foreach($dataAbsen as $absen): ?>
						<tr>
							<td><?= $absen->id;?></td>
							<td><?= $absen->matkul;?></td>
							<td><?= $absen->dosen;?></td>
							<td><?= $absen->mahasiswa;?></td>
							<td><?= $absen->status;?></td>
							<td><?= $absen->tanggal;?></td>
							<td><?= anchor('Absensi/delete/'.$absen->id, 'Delete');?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
			</table>
		</div>
	</div>
</div>
