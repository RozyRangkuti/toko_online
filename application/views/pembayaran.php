<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="btn btn-success">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents())
        {
          foreach ($keranjang as $item) {
            $grand_total += $item['subtotal'];
          }
          echo "<h5>Total belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
        
        ?>
      </div><br><br>

      <h3>Input Alamat Pengiriman dan pembayaran</h3>
      <form method="post" action="<?= base_url('dashboard/proses_pesanan') ?>">

        <div class="form-group">
          <label for="">Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="">Alamat Lengkap</label>
          <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="">No. Telepon</label>
          <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control" required>
        </div>

        <div class="form-group" required>
          <label>Jasa Pengiriman</label>
          <select class="form-control">
            <option>JNE</option>
            <option>J&T</option>
            <option>Tiki</option>
            <option>POS Indonesia</option>
            <option>GOJEK</option>
            <option>GRAB</option>
          </select>
        </div>

        <div class="form-group" required>
          <label>Pilih BANK</label>
          <select class="form-control">
            <option>BSI - xxxxxxx</option>
            <option>BCA - xxxxxxx</option>
            <option>BNI - xxxxxxx</option>
            <option>BRI - xxxxxxx</option>
            <option>Mandiri - xxxxxxx</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Pesan</button>

      </form>
        <?php 
        } else {
          echo "Keranjang belanja anda masih kosong";
        }
        ?>
    </div>

    <div class="col-md-2"></div>
  </div>
</div>