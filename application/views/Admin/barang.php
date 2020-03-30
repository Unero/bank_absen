<div class="container mt-5">
	<h3 class="text-center">Data Barang</h3>
	<button type="button" class="btn btn-primary mt-2 mb-4" data-toggle="modal" data-target="#create">
		Create
	</button>
	<table class="table table-bordered" id="list">
		<thead class="thead-inverse">
			<tr>
				<th scope="col" class="text-center">Nama</th>
				<th scope="col" class="text-center">Deskripsi</th>
				<th scope="col" class="text-center">Point</th>
				<th scope="col" class="text-center">Stock</th>
				<th scope="col" class="text-center">Add Stock</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach ($barang as $brg):?>
				<tr>
					<td scope="row" class="text-center"><?= $brg->nama;?></td>
					<td scope="row" class="text-center"><?= $brg->deskripsi;?></td>
					<td scope="row" class="text-center"><?= $brg->point;?></td>
					<td scope="row" class="text-center"><?= $brg->stock;?></td>
					<td scope="row" class="text-center">
						<?= form_open('Barang/addStock/'.$brg->id); ?>
						<form action="" method="post">
							<div class="form-group">
							  <input type="hidden" name="stock_awal" value="<?= $brg->stock; ?>">
							  <input type="number" name="stock" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary">Add Stock</button>
						</form>
						<?= form_close(); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menambah Barang baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<?= form_open('Barang/add');?>
		<form action="" method="post">
			<div class="form-group">
			  <label for="nama">Nama</label>
			  <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama barang">
			</div>
			<div class="form-group">
			  <label for="deskripsi">Deskripsi</label>
			  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
			</div>
			<div class="form-group">
			  <label for="point">Point</label>
			  <input type="number" name="point" id="point" class="form-control" placeholder="Masukkan point barang">
			</div>
			<div class="form-group">
			  <label for="stock">Stock</label>
			  <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan jumlah stock">
			</div>
			<button type="submit" class="btn btn-success">Buat</button>
		</form>
		<?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#list').DataTable();
	});
</script>
