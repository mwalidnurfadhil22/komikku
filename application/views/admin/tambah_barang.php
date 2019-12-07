
        <div class="col-md-7 mb-5 ml-5">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
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
                        <a href="<?= base_url()?>admin/data_barang/" type="button" class="btn btn-secondary">Close</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>