<div class="container mt-5">
    <h3>Point anda: <?= $point[0]->point; ?></h3>

    <h3 class="text-center">Item</h3>
    <div class="col">
        <div class="row">
			<?php foreach ($barang as $brg):?>
			<div class="card mr-4 mb-3">
				<div class="card-body">
					<?= form_open('Keranjang/add'); ?>
					<?= form_hidden('id', $brg->id); ?>
					<?= form_hidden('nama', $brg->nama); ?>
					<?= form_hidden('point', $brg->point); ?>
					<?= form_hidden('jumlah', 1); ?>
					<h5 class="card-title"><?= $brg->nama;?></h5>
					<p class="card-text"><?= $brg->deskripsi;?></p>
					<p class="card-text">Harga: <?= $brg->point;?></p>
					<button type="submit" class="btn btn-primary">Add to Cart</button>
					<?= form_close(); ?>
				</div>
			</div>
			<?php endforeach; ?>
        </div>
    </div>
</div>
