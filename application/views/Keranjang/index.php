<?= form_open('Keranjang/update'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th>Quantity</th>
						<th>Nama</th>
						<th style="text-align:right">Item Price</th>
						<th style="text-align:right">Sub-Total</th>
					</tr>
				</thead>
				<?php $i = 1; ?>
				<tbody>
					<?php foreach ($this->cart->contents() as $items): ?>
					<?php echo form_hidden('rowid', $items['rowid']); ?>
					<tr>
						<td scope="row"><?php echo form_input(array('name' => 'qty', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
						<td><?= $items['name'];?></td>
						<td style="text-align:right"><?= $items['price']; ?></td>
						<td style="text-align:right"><?= $items['subtotal']; ?></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
					<tr>
						<td class="text-center" colspan="3" class="right"><strong>Total</strong></td>
						<td class="text-center"><?php echo "\t".$this->cart->total(); ?></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-info mr-2">Update Cart</button>
			<a href="Keranjang/bayar/<?= $this->cart->total();?>" class="btn btn-primary">Checkout</a>
		</div>
	</div>
</div>
<?= form_close();?>
