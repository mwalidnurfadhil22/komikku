<?php if($this->session->flashdata('sukses')) {
echo '<div class="alert alert-warning">';
echo $this->session->flashdata('sukses');
echo '</div>';
}?>
    


<table  cellpadding="6" cellspacing="1" style="width:100%" border="0" class="table">

<tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
        <th style="text-align:right">Aksi</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td>
                        <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                </td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Rp<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                <td style="text-align:right">
                    <!-- <a href="<?= base_url('cart/update_keranjang/'.$items['rowid'])?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i> Update
                    </a> -->
                    <a href="<?= base_url('cart/hapus_keranjang/'.$items['rowid'])?>" class="btn btn-warning btn-sm" onclick="return confirm('yakin ingin menghapus data ini ?')">
                        <i class="fa fa-trash"></i> Hapus
                    </a>
                </td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="3"> </td>
        <td colspan="1" class="right"><strong>Total</strong></td>
        <td class="right">Rp<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<div align="right">
    <a href="<?= base_url('cart/hapus_keranjang')?>" onclick="return confirm('yakin ingin menghapus keranjang ?')"><div class="btn btn-sm btn-danger">Bersihkan Keranjang Belanja</div></a>
    <a href="<?= base_url()?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
    <a href="<?= base_url('cart/pembayaran')?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
</div>