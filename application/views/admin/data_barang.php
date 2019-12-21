<div class="container-fluid">
	<a class="btn btn-sm btn-primary mb-3" href="<?= base_url(); ?>admin/data_barang/tambah"><i class="fas fa-plus fa-sn"></i> Tambah Barang</a>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>JUDUL</th>
			<th>PENULIS</th>
			<th>PENERBIT</th>
			<th>TAHUN TERBIT</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
		$no=1;
		foreach ($barang as $brg) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $brg->judul ?></td>
			<td><?= $brg->penulis ?></td>
			<td><?= $brg->penerbit ?></td>
			<td><?= $brg->thn_terbit ?></td>
			<td><?= $brg->kategori ?></td>
			<td><?= $brg->harga ?></td>
			<td><?= $brg->stok ?></td>
			<td>
				<a href="<?= base_url(); ?>admin/data_barang/detail/<?= $brg->id_brg ?>"><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></a>
			</td>
			<td>
                <a href="<?= base_url(); ?>admin/data_barang/edit/<?= $brg->id_brg ?>" class="btn btn-primary btn-sm" onclick="return confirm('yakin ingin mengedit data ini ?')"><i class="fas fa-edit"></i></a>
			</td>
			<td>
                <a href="<?= base_url(); ?>admin/data_barang/hapus/<?= $brg->id_brg ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>


<!-- <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?= base_url(). 'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Judul Buku</label>
        		<input type="text" name="judul" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Penulis Buku</label>
        		<input type="text" name="penulis" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Penerbit Buku</label>
        		<input type="text" name="penerbit" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Tahun Terbit</label>
        		<input type="text" name="thn_terbit" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<input type="text" name="kategori" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div> -->