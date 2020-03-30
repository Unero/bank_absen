<div class="container mt-5">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<h3>Your Profile</h3>
				</div>
				<div class="card-body">
					<table class="table borderless">
						<tbody>
							<tr>
								<td scope="row"><h5>NIM</h5></td>
								<td><?= $profile[0]->nim;?></td>
							</tr>
							<tr>
								<td scope="row"><h5>Nama</h5></td>
								<td><?= $profile[0]->nama;?></td>
							</tr>
							<tr>
								<td scope="row"><h5>Kelas</h5></td>
								<td><?= $profile[0]->kelas;?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
