<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                    $grand_total =0;
                    if($keranjang = $this->cart->contents()){
                        foreach ($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                    }
                    echo "<h3>Total Pembayaran Anda: Rp. ".number_format($grand_total, 0,',','.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            
            <form action="post" action="<?= base_url() ?>/home/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap ..." class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap ..." class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telpon" placeholder="Nomor Telepon ..." class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>J&T</option>
                        <option>POS Indonesia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA xxxxxxxxx</option>
                        <option>BRI xxxxxxxxx</option>
                        <option>BNI xxxxxxxxx</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                <a href="<?= base_url('cart')?>" class="btn btn-sm btn-danger">Kembali</a>

            </form>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>