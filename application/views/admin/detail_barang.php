<div class="container-fluid">
	<div class="card">
		<div class="card">
		  	<div class="card-header">
		    	Detail Komik
		  	</div>
		 	<div class="card-body">

				<?php foreach ($barang as $brg): ?>
					<div class="row">
						<div class="col-md-4">
							<img width="300px" height="400px" src="<?php echo base_url().'/assets/img/'.$brg->gambar ?>" class="card-imd-top">
						</div>
						<div class="col-md-8">
							<table class="table">
								<tr>
									<td>Judul</td><td><strong><?php echo $brg->judul?></strong></td>
								</tr>
								<tr>
									<td>Penulis</td><td><strong><?php echo $brg->penulis?></strong></td>
								</tr>
								<tr>
									<td>Penerbit</td><td><strong><?php echo $brg->penerbit?></strong></td>
								</tr>
								<tr>
									<td>Kategori</td><td><strong><?php echo $brg->kategori?></strong></td>
								</tr>
								<tr>
									<td>Tahun Terbit</td><td><strong><?php echo $brg->thn_terbit?></strong></td>
								</tr>
								<tr>
									<td>Stok</td><td><strong><?php echo $brg->stok?></strong></td>
								</tr>
								<tr>
									<td>Harga</td><td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0, ',','.') ?></div></strong></td>
								</tr>
							</table>
							<?php echo anchor('admin/data_barang','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>