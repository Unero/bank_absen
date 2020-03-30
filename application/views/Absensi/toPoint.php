<div class="container mt-5">
	<div class="row">
		<div class="col-lg-12">
			<h2>Absent yang memiliki point</h2>
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
						<?php foreach($pointable as $absen): ?>
						<tr>
							<td><?= $absen->id;?></td>
							<td><?= $absen->matkul;?></td>
							<td><?= $absen->dosen;?></td>
							<td><?= $absen->mahasiswa;?></td>
							<td><?= $absen->status;?></td>
							<td><?= $absen->tanggal;?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
			</table>
			<a href="Point/all" class="btn btn-primary">Kumpulkan Semua Point</a>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-lg-12">
			<h2>Absent yang tidak memiliki point</h2>
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
						</tr>
						<?php endforeach; ?>
					</tbody>
			</table>
		</div>
	</div>
</div>
