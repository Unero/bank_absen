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
								<td scope="row"><h5>Username</h5></td>
								<td><?= $profile[0]['username'];?></td>
							</tr>
							<tr>
								<td scope="row"><h5>Name</h5></td>
								<td><?= $profile[0]['nama'];?></td>
							</tr>
							<tr>
								<td scope="row"><h5>Alamat</h5></td>
								<td><?= $profile[0]['alamat'];?></td>
							</tr>
						</tbody>
					</table>
					<a href="" class="btn btn-info">Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>
