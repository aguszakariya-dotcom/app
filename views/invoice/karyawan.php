<?php
// Mendapatkan tanggal hari ini
$tanggal = date('d/m/Y'); // Format: YYYY-MM-DD
$TgInvoive = date('ydm');
$bulan = date('F');
$bln = date('m');
$th = date('y');
$tglSekarang = date('d-M-Y');
?>
<style>
  body {
    background-color: white;
  }

  @media print {
    body {
      font-size: 16px;
      background-color: white;
      /* Sesuaikan ukuran font sesuai kebutuhan */
    }

    /* Menonaktifkan background pada elemen lain jika diperlukan */
    /* Misalnya, jika ada elemen lain yang memiliki background */
    /* yang tidak ingin dicetak, Anda dapat menonaktifkannya di sini */

    /* Contoh menonaktifkan background pada elemen dengan class 'no-print-background' */
    .no-print-background {
      background-color: transparent !important;
    }

    .table td {
      font-size: large;
    }

    .invoice-info {
      font-size: large;
    }

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
      <form action="<?= BASEURL; ?>/invoice/tambahDGaji" method="post">
        <div class="card-header bg-gradient-secondary">

          <!-- <div class="text-bold text-center"> = <span id="Semua" name="total"></span></div> -->
        </div>
        <div class="card-body">
          <input type="hidden" name="tanggal" value="<?= $tglSekarang; ?>">
          <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <select class="form-select form-control" id="nama" name="nama">
                <option>Pilih Nama Pegawai</option>
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-5" for="hadir">Hadir</label>
            <div class="col-sm-7">
              <select class="form-control form-control-border border-width-2 select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" id="hadir" name="hadir">
                <option selected="selected">Pilih</option>
                <option value="0">Tidak hadir</option>
                <option value="10000">1 Hari</option>
                <option value="20000">2 Hari</option>
                <option value="30000">3 Hari</option>
                <option value="40000">4 Hari</option>
                <option value="50000">5 Hari</option>
                <option value="60000">6 Hari</option>
                <option value="70000">7 Hari</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-5" for="lembur">Lembur</label>
            <div class="col-sm-7">
              <select class="form-control form-control-border border-width-2 select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" id="lembur" name="lembur">
                <option selected="selected">Pilih</option>
                <option value="0">Tidak ada lembur</option>
                <option value="10000">1 X</option>
                <option value="20000">2 X</option>
                <option value="30000">3 X</option>
                <option value="40000">4 X</option>
                <option value="50000">5 X</option>
                <option value="60000">6 X</option>
                <option value="70000">7 X</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-5" for="salary">Salary</label>
            <div class="col-sm-7">
              <input type="text" class="form-select form-control" id="salary" name="salary">
            </div>
          </div>
          <div class="mb-3 row">
        <label class="col-sm-5" for="total">Grand Total</label>
        <div class="col-sm-7">
          <input type="text" class="form-control form-control btn-outline-primary" id="total" name="total">
        </div>
        </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-outline-info">Simpan Gaji</button>
        </div>
    </div>
    </form>
  </div>
  <div class="col-lg-8 px-3 mb-5">
    <div class="invoice p-3 mb-3 mt-1 card-bg">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <img src="<?= BASEURL; ?>/images/logo.jpg" alt="sovana Logo" class="brand-image" style="opacity: .8" height="50" width="50"> SOVANABALI
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
            <span class="text-bold text-capitalize" id="namaNya">John Doe</span><br>
            <span id="alamat">795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107</span>.<br>
            Phone: <span id="tlp">(555) 539-1037</span><br>
            Email:<span id="mail">john.doe@example.com</span>
          </address>
        </div>
        <!-- /.col -->

        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?= $TgInvoive; ?></b><br>
          <br>
          <b>Order ID:</b> <?= $th; ?>SBG<?= $bln; ?><br>
          <b>Payment Due:</b> <?= $bulan; ?><br>
          <b>Account:</b> 923-0<span id="idNya"></span>
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
              <?php foreach ($data['invoice'] as $inv) : ?>
                <tr id="invKaryawan" data-qty="<?= $inv['qty']; ?>" data-item="<?= $inv['item']; ?>" data-description="<?= $inv['description']; ?>" data-cost="<?= $inv['cost']; ?>" data-total="<?= $inv['total']; ?>">
                  <td id="isiNama"><?= $inv['nama']; ?></td>
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
                <th style="width:50%">Subtotal:</th>
                <td class="" id="subTtl">2000000</td>
              </tr>
              <tr>
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
  <!-- /.invoice -->
</div>
<div class="row mb-5"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Inisialisasi DataTable pada tabel invoice
    var table = $('#table-invoice').DataTable();

    // Memuat data karyawan dan mengisi opsi dropdown
    var apiData;
    $.getJSON("<?= BASEAPI ?>/karyawan.php", function(data) {
      var selectOptions = $("#nama");

      data.forEach(function(item) {
        selectOptions.append($('<option>', {
          value: item.nama,
          text: item.nama
        }));
      });
    });

    $.getJSON("<?= BASEAPI; ?>/karyawan.php", function(data) {
      apiData = data;

      $('#nama').change(function() {

        var selectedNama = $(this).val();
        var table = $('#table-invoice').DataTable();

        // Set nilai pencarian DataTables dengan nilai terpilih
        table.search(selectedNama).draw();

        // Operasi pada kolom total setelah DataTable menggambar ulang
        var total = table
          .column(5, {
            search: 'applied'
          }) // Sesuaikan indeks kolom total
          .data()
          .reduce(function(acc, val) {
            // Bersihkan format angka dan tambahkan ke total
            var cleanTotal = parseFloat(val.replace(/[^0-9.-]+/g, '')) || 0;
            return acc + cleanTotal;
          }, 0);

        // Lakukan sesuatu dengan nilai total, misalnya tampilkan di suatu tempat
        // console.log('Total: ', total);

        var nm = $(this).val();

        var ny = $('#namaNya');
        ny = nm;

        var jab = "";
        var almt = "";
        var hp = "";
        var ml = "";
        var id = "";
        var idNya = $('#idNya');
        var jabatan = $('#jabatan');
        var alamat = $('#alamat');
        var phone = $('#tlp');
        var mail = $('#mail');
        $('#namaNya').text(ny);
        apiData.forEach(function(item) {
          if (item.nama === nm) {
            jab = item.jabatan;
            almt = item.alamat;
            hp = item.telepon;
            ml = item.email;
            id = item.id;
            jabatan.text(jab);
            alamat.text(almt);
            phone.text(hp);
            mail.text(ml);
            idNya.text(id);
          }
        });
      });
    });
    // Fungsi untuk menghitung total setelah DataTable menggambar ulang
    function hitungTotal() {
      // Operasi pada kolom total setelah DataTable menggambar ulang
      var total = table
        .column(5, {
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
      $('#salary').val('Rp. ' + total.toLocaleString("id-ID"));

      // Set nilai pada elemen dengan ID subTtl
      $('#subTtl').text('Rp. ' + total.toLocaleString("id-ID"));

    }

    // Event handler saat dropdown #nama berubah
    $('#nama').change(function() {
      var selectedNama = $(this).val();

      // Set nilai pencarian DataTables dengan nilai terpilih
      table.search(selectedNama).draw();

      // Memanggil fungsi hitungTotal
      hitungTotal();

      // Menampilkan informasi karyawan terpilih
      var karyawan = apiData.find(function(item) {
        return item.nama === selectedNama;
      });

      // Update informasi karyawan pada halaman
      if (karyawan) {
        $('#namaNya').text(karyawan.nama);
        $('#jabatan').text(karyawan.jabatan);
        $('#alamat').text(karyawan.alamat);
        $('#tlp').text(karyawan.telepon);
        $('#mail').text(karyawan.email);
        $('#idNya').text(karyawan.id);
      }
      // hitungJumlahTotal();
    });

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

    // Memanggil fungsi jumlahSubTtlNya
    jumlahSubTtlNya();

    // Memanggil fungsi hitungTotal saat halaman dimuat
    hitungTotal();


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
      var tunjanganHadir = parseFloat($('#tHadir').text().replace(/\D/g, ''));
      var tunjanganLembur = parseFloat($('#tLembur').text().replace(/\D/g, ''));

      var total = subtotal + tunjanganHadir + tunjanganLembur;

      $('#gTotal').text('Rp. ' + total.toLocaleString("id-ID"));
      $('#total').val(total);
    }
  });
</script>