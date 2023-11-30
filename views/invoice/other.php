<?php
// Mendapatkan tanggal hari ini
$tanggal = date('d/m/Y'); // Format: YYYY-MM-DD
$TgInvoive = date('ydm');

?>
<style>
  @media print {
    body {
      font-size: 16px;
      /* Sesuaikan ukuran font sesuai kebutuhan */
    }

    .table td {
      font-size: large;
    }

    .invoice-info {
      font-size: large;
    }

  }

  .card-bg {
            background-image: url('<?= BASEURL; ?>/images/greyLogo.png');
            background-color: white;
            background-repeat: no-repeat;
            /* background-size: cover; */
            background-position: center;
        }
  .table th {
    font-size: 16px;
    font-weight: 600;
  }

  #isiNama,
  #tdNama {
    display: none;
  }

  /* .table td {
    font-size: 12px;
  } */

  .dataTables_length {
    display: none;
  }

  .trans {
    background-color: rgba(255, 255, 255, 0.1);
    /* Putih dengan tingkat transparansi 70% */
  }

  .dataTables_paginate {
    display: none;
  }

  .dataTables_info {
    display: none;
  }

  option {
    font-size: medium;
  }

  .table-invoice_filter,
  .dataTables_filter {
    display: none;
  }
</style>
<div class="row justify-content-center mb-5">
  <!-- Main content -->
  <div class="col-lg-3 d-print-none">
    <div class="card mt-5">
      <div class="card-header bg-gradient-secondary">
        <div class="text-bold text-center">Grand Total = <span id="semua">1.000.000.000</span></div>
      </div>
      <div class="card-body">
      <form action="<?= BASEURL; ?>/invoice/tambahImperial" method="post">
        <?php $hr = date('d-M-Y'); ?>
        <input type="hidden" name="tanggal" value="<?= $hr; ?>">
        <div class="mb-3 row">
          <label for="item" class="col-sm-4 col-form-label">Item</label>
          <div class="col-sm-8">
            <input type="text" class="form-control text-capitalize" name="item" id="item">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="descripsi" class="col-sm-4 col-form-label">Description</label>
          <div class="col-sm-8">
            <input type="text" class="form-control text-capitalize" name="descripsi" id="descripsi">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cost" class="col-sm-4 col-form-label">Cost</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" name="cost" id="cost" onchange="calculateTotal()">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="qty" class="col-sm-4 col-form-label">Qty</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" name="qty" id="qty" onchange="calculateTotal()">
          </div>
        </div>

      </div>
      <div class="card-footer">
        <div class="row">
        <label for="total" class="col-sm-4 col-form-label">Total</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" name="total" id="total" readonly>
          <br>
          <button type="submit" class="btn btn-sm btn-primary">Save</button>
        </div>
        </div>
      </div>
</form>
    </div>
  </div>
  <div class="col-lg-8 px-3 mb-5">
    <div class="invoice p-3 mb-3 mt-1 card-bg">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <img src="<?= BASEURL; ?>/images/logoPojokMedia.png" alt="Pojok Logo" class="brand-image" style="opacity: .9" height="90" width="150">
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
            <strong>Pojok media, Inc.</strong><br>
            Jl. Gunung Tangkuban Perahu, <br>
            BUANA PERMAI, Blok 1/20<br>
            Phone: (62) 817-977-7607<br>
            Email: zack77@pojokmedia.my.id
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <span class="text-bold text-capitalize" id="namaNya">IMPERIAL</span><br>
            <span id="alamat">795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107</span>.<br>
            Phone: <span id="tlp">+62 821-4401-5052 </span><br>
            Email:<span id="mail">adivicious@yahoo.com</span>
          </address>
        </div>
        <!-- /.col -->

        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?= $TgInvoive; ?></b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> <?= $tanggal; ?><br>
          <b>Account:</b> 923-0<span id="idNya">34</span>
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
                <th id="tdNama">Nama</th>
                <th>Qty</th>
                <th class="col-sm-2">Item</th>
                <th class="col-sm-">Description</th>
                <th>Cost</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['imperial'] as $inv) : ?>
                <tr id="id" data-qty="<?= $inv['qty']; ?>" data-item="<?= $inv['item']; ?>" data-description="<?= $inv['descripsi']; ?>" data-cost="<?= $inv['cost']; ?>" data-total="<?= $inv['total']; ?>">
                  <td id="isiNama"><?= $inv['nama']; ?></td>
                  <td><?= $inv['qty']; ?></td>
                  <td><?= $inv['item']; ?></td>
                  <td><?= $inv['descripsi']; ?></td>
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
                <td class="text-bold" id="subTtl">2000000</td>
              </tr>
              <tr>
                <!-- <th>Total:</th>
                <td id="gTotal"></td> -->
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-12">
          <a href="#" rel="noopener" target="_blank" class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
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
  <!-- /.invoice -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    function calculateTotal() {
        var cost = parseFloat($('#cost').val().replace(/[^0-9.-]+/g, ""));
        var qty = parseInt($('#qty').val() || 0); // Handle empty input
        var total = cost * qty;
        $('#total').val(total);
        
    }

    // Handle input change event for qty
    $('#qty').on('input', function() {
        calculateTotal();
    });

    // function saveData() {
    //     // Get the input values
    //     let item = document.getElementById('item').value;
    //     let descripsi = document.getElementById('descripsi').value;
    //     let cost = document.getElementById('cost').value;
    //     let qty = document.getElementById('qty').value;
    //     let total = document.getElementById('total').value;

    //     // Send the data to the backend using AJAX or fetch API
    // }
    $('#table-invoice').DataTable();


    var apiData;
    $.getJSON("<?= BASEAPI; ?>/imperial.php", function(data) {
      apiData = data;

      $('#nama').change(function() {
        var selectedNama = $(this).val();
        var table = $('#table-invoice').DataTable();

        // Set nilai pencarian DataTables dengan nilai terpilih
        table.search(selectedNama).draw();

        // Operasi pada kolom total setelah DataTable menggambar ulang
        var total = table
          .column(4, {
            search: 'applied'
          }) // Sesuaikan indeks kolom total
          .data()
          .reduce(function(acc, val) {
            // Bersihkan format angka dan tambahkan ke total
            var cleanTotal = parseFloat(val.replace(/[^0-9.-]+/g, '')) || 0;
            return acc + cleanTotal;
          }, 0);

        // Lakukan sesuatu dengan nilai total, misalnya tampilkan di suatu tempat
        console.log('Total: ', total);
        // });
        });
    });

    var subTttl = $('#subTtl');
    var semuaNya = $('#semua');

    function jumlahSubTtlNya() {
      var totalSum = 0;
      $('#table-invoice tbody tr').each(function() {
        var totalCell = $(this).find('td:eq(5)');
        var totalSubNya = parseInt(totalCell.text().replace(/\D/g, ''));
        totalSum += totalSubNya;
      });
      var formatJumlah = "Rp. " + totalSum.toLocaleString("id-ID");
      subTttl.text(formatJumlah);
      semuaNya.text(formatJumlah);
    }
    jumlahSubTtlNya();

    $('#nama').change(function() {
      var selectedNama = $(this).val();
      var apiData;


      // Fungsi untuk memuat data dari server
      function loadData() {
        $.getJSON("<?= BASEAPI; ?>/invoice.php", function(data) {
          apiData = data;

          // Inisialisasi DataTable
          var table = $('#table-invoice').DataTable();

          // Event handler saat #nama berubah
          $('#nama').change(function() {
            var selectedNama = $(this).val();

            // Hapus filter yang ada
            table.search('').draw();

            // Terapkan filter pada kolom 'nama'
            table.column(1).search(selectedNama).draw();
          });
        });
      }

      // Memuat data saat halaman pertama kali dimuat
      loadData();
    });

    var thd = $('#tHadir');
    var tlb = $('#tLembur');

    $('#hadir').on('change', function() {
      var hr = parseFloat($(this).val());
      thd.text('Rp. ' + hr.toLocaleString("id-ID"));
      hitungJumlahTotal();
    });

    $('#lembur').on('change', function() {
      var lb = parseFloat($(this).val());
      tlb.text('Rp. ' + lb.toLocaleString("id-ID"));
      hitungJumlahTotal();
    });

    function hitungJumlahTotal() {
      var subtotal = parseFloat($('#subTtl').text().replace(/\D/g, ''));

      var total = subtotal;

      $('#gTotal').text('Rp. ' + total.toLocaleString("id-ID"));
      $('#semua').text('Rp. ' + total.toLocaleString("id-ID"));


    }
  });
</script>