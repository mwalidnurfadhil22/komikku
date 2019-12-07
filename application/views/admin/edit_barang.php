<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
	<?php foreach ($barang as $brg) : ?>
		<form method="post" action="<?= base_url().'admin/data_barang/update' ?>">
		
                <input type="hidden" name="id_brg" value="<?= $brg->id_brg ?>">	
		<div class="form-group">
        		<label>Judul Buku</label>
        		<input type="text" name="judul" class="form-control" value="<?= $brg->judul ?>">
        	</div>

        	<div class="form-group">
        		<label>Penulis Buku</label>
        		<input type="text" name="penulis" class="form-control" value="<?= $brg->penulis ?>">
        	</div>

        	<div class="form-group">
        		<label>Penerbit Buku</label>
        		<input type="text" name="penerbit" class="form-control" value="<?= $brg->penerbit ?>">
        	</div>

        	<div class="form-group">
        		<label>Tahun Terbit</label>
        		<input type="text" name="thn_terbit" class="form-control" value="<?= $brg->thn_terbit ?>">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>">
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>">
        	</div>

        	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        	
		</form>
	<?php endforeach; ?>
</div>