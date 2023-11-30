
<?php
// Mendapatkan tanggal hari ini
$tanggal = date('d/m/Y'); // Format: YYYY-MM-DD
$TgInvoive = date('ydm');
$bulan = date('F');
$bln = date('m');
$th = date('y');

?>
<div class="row mt-2 justify-content-center">
  <div class="col-lg-7 px-3 mb-5">
    <div class="invoice p-3 mb-3 mt-1 card-bg">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <img src="<?= BASEURL; ?>/images/logo.jpg" alt="sovana Logo" class="brand-image" style="opacity: .8" height="50" width="50"> SOVANA BALI
            <small class="float-right">Date: <?= $tanggal; ?></small>
          </h4>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Supervisor, Inc.</strong><br>
            Jl. Gunung Tangkuban Perahu, <br>
            BUANA PERMAI, Blok 1/20<br>
            Phone: (62) 817-977-7607<br>
            Email: zack77@sovanabali.my.id
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <span class="text-bold text-capitalize" id="namaNya">wahyuningsih</span><br>
            <span id="alamat">PT. SOVANA BALI GARMEN</span>.<br>
            Phone: <span id="tlp">(+62) 859 4089 7837</span><br>
            Email:<span id="mail">wahyuningsih@sovanabali.com</span>
          </address>
        </div>
        <!-- /.col -->

        <div class="col-sm-4 invoice-col">
          <b>Invoice #S<?= $TgInvoive; ?></b><br>
          <br>
          <b>Order ID:</b> <?= $th; ?>SBG<?= $bln; ?><br>
          <b>Payment Due:</b> <?= $tanggal; ?><br>
          <!-- <b>Account:</b> 923-0<span id="idNya"></span> -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row trans">
        <div class="col-12 table-responsive ">
          <table class="table table-striped bg-transparent" id="table-invoice" width="100%">
            <thead>
              <tr>
                <!-- <th id="tdNama">Nama</th> -->
                <th>Qty</th>
                <th class="col-sm-2">Item</th>
                <th class="col-sm-">Description</th>
                <th>Cost</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['invoice'] as $inv) : ?>
                <tr id="invKaryawan" data-qty="<?= $inv['qty']; ?>" data-item="<?= $inv['item']; ?>" data-description="<?= $inv['description']; ?>" data-cost="<?= $inv['cost']; ?>" data-total="<?= $inv['total']; ?>">
                  <td><?= $inv['qty']; ?></td>
                  <td><?= $inv['item']; ?></td>
                  <td><?= $inv['description']; ?></td>
                  <td><?= $inv['cost']; ?></td>
                  <td><?= $inv['total']; ?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row trans">
        <!-- accepted payments column -->
        <div class="col-6 shadow-none justify-content-center">
          <p class="lead">Payment Methods:</p>
          <img src="<?= BASEURL; ?>/dist/img/credit/visa.png" alt="Visa">
          <img src="<?= BASEURL; ?>/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?= BASEURL; ?>/dist/img/credit/american-express.png" alt="American Express">
          <img src="<?= BASEURL; ?>/dist/img/credit/paypal2.png" alt="Paypal">
          <img src="<?= BASEURL; ?>/dist/img/credit/tunai.png" alt="Tunai" height="32" width="51" style="border: 1px solid cyan;">
          <img src="<?= BASEURL; ?>/dist/img/credit/transfer.png" alt="Tunai" height="32" width="51" style="border: 1px solid cyan;">

          <div class="text-muted well well-sm " style="margin-top: 10px;">
            <img class="text-center" src="<?= BASEURL; ?>/images/ttd.png" alt="tanda tangan" width="200px" height="150px"><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="text-center">( Agus zakariya )</span>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-6">
          <!-- <p class="lead">Amount Due 2/22/2014</p> -->

          <div class="table-responsive trans">
            <table class="table trans">
              <tr>
                <th style="width:50%">Total:</th>
                <td class="text-bold " id="subTtl">2000000</td>
              </tr>
              <!-- <tr>
                <th>Tunjangan Hadir:</th>
                <td id="tHadir">100.000</td>
              </tr>
              <tr>
                <th>Tunjangan Lembur:</th>
                <td id="tLembur">0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td id="gTotal" class="text-bold"></td>
              </tr> -->
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-12">
          <a href="#" class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
          <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
            Payment
          </button>
          <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
            <i class="fas fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5"></div>
<style>
  #subTtl {
    font-size: 16px;
  }
</style>
<script>
  $(document).ready(function() {
    jumlahSubTtlNya()
        // Fungsi untuk menghitung subtotal dari tabel-invoice
        function jumlahSubTtlNya() {
        var totalSum = 0;

        // Loop melalui setiap baris pada tbody tabel-invoice
        $('#table-invoice tbody tr').each(function() {
            var totalCell = $(this).find('td:eq(4)');
            var totalSubNya = parseInt(totalCell.text().replace(/\D/g, '')) || 0;
            totalSum += totalSubNya;
        });

        // Set nilai pada elemen dengan ID subTtl
        $('#subTtl').text('Rp. ' + totalSum.toLocaleString("id-ID"));
    }
  })
</script>