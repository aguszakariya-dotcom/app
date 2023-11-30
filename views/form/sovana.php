<style>
     .content {
          /* font-size: smaller; */
          font-family: 'Times New Roman', Times, serif;
          /* background-image: url('https://wallpapers.com/images/featured-full/sexy-body-txdajxjfip2a9txg.jpg'); */
          background-color: light;
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          /* background-color: #111; */
          margin: 0;
          padding: 0;
          width: 100%;
          height: 100%;
     }

     #card-kiri .card-body,
     #card-kanan .card-body {
          max-height: 600px;
          overflow-y: auto;
          /* Menambahkan scrollbar jika kontennya lebih panjang dari max-height */
     }

     .card-header {
          font-size: large;
          font-weight: 600;
     }

     form,
     input-control {

          font-size: small;
          font-family: 'Times New Roman', Times, serif;
     }

     .animate__animated {
          --animate-duration: 2s;
     }

     .table {
          font-size: smaller;
          font-family: 'Times New Roman', Times, serif;
     }

     .table td {
          font-size: 14px;
     }

     .table th {
          font-size: 16px;
     }
     .sorting aria-control {
          display: none;
     }
     .icon {
          display: none;
          font-size: large;
     }
</style>
<div class="row justify-content-center pt-3 ">
     <!-- kiri -->
     <div class="col-lg-4 animate__animated" id="card-kiri">
          <div class="card shadow">
               <div class="card-header text-center">Data Produksi</div>
               <div class="card-body">
                    <table class="table table-striped table-bordered table-hover" id="table-data">
                         <thead>
                              <tr>
                                   <th>Customer</th>
                                   <th>Style</th>
                                   <th>Code</th>
                                   <th>Color</th>
                                   <th>Qty</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach ($data['produksi'] as $produksi) : ?>
                                   <tr id="tableHargaProduksi" data-id="<?= $produksi['id']; ?>" data-nama_customer="<?= $produksi['nama_customer']; ?>" data-code="<?= $produksi['code']; ?>" data-style="<?= $produksi['style']; ?>" data-warna="<?= $produksi['warna']; ?>" data-size="<?= $produksi['size']; ?>" data-qty="<?= $produksi['qty']; ?>" data-harga="<?= $produksi['harga']; ?>" data-jahit="<?= $produksi['jahit']; ?>" data-motong="<?= $produksi['motong']; ?>" data-naskat="<?= $produksi['naskat']; ?>">
                                        <td class="text-capitalize"><?= $produksi['nama_customer']; ?></td>
                                        <td class="text-capitalize"><?= $produksi['style']; ?></td>
                                        <td><?= $produksi['code']; ?></td>
                                        <td class="text-capitalize"><?= $produksi['warna']; ?></td>
                                        <td><?= $produksi['qty']; ?></td>
                                   </tr>
                              <?php endforeach; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
     <!-- tengah -->
     <div class="col-lg-3  animate__animated " id="card-tengah">
          <div class="card shadow ">
               <div class="card-header text-center bg-secondary">

                    Input data Salary
                    <div class="float-right" id=" "><?= number_format($data['totalHariIni'], 0, ',', '.'); ?></div>
               </div>
               <div class="card-body">
                    <form action="<?= BASEURL; ?>/invoice/tambahInv" method="POST" id="formSalary">
                              
                         <div class="mb-3 row">
                              <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" name="tanggal" value="<?= date('d-M-Y') ?>">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Customer -->
                         <div class="mb-3 row">
                              <label for="cst" class="col-sm-4 col-form-label">Customer</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control text-capitalize" name="customer" id="customer">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Style -->
                         <div class="mb-3 row">
                              <label for="style" class="col-sm-4 col-form-label">Style</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control text-capitalize" name="style" id="style">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Warna -->
                         <div class="mb-3 row">
                              <label for="warna" class="col-sm-4 col-form-label">Warna</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control text-capitalize" name="warna" id="warna">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Size -->
                         <div class="mb-3 row">
                              <label for="size" class="col-sm-4 col-form-label">Size</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control text-uppercase" name="size" id="size">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Jumlah -->
                         <div class="mb-3 row">
                              <label for="qty" class="col-sm-4 col-form-label">Jumlah</label>
                              <div class="col-sm-8">
                                   <input type="number" class="form-control animate__animated " name="qty" id="qty">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Harga -->
                         <div class="mb-3 row">
                              <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                              <div class="col-sm-8">
                                   <input type="number" class="form-control" name="harga" id="harga">
                              </div>
                         </div>
                         <!-- Tambahkan form-group untuk input Total -->
                         <div class="mb-3 row">
                              <label for="total" class="col-sm-4 col-form-label">Total</label>
                              <div class="col-sm-8">
                                   <input type="number" class="form-control" name="total" id="total">
                              </div>
                         </div>
                         <hr>
                         <div class="text-center">                              
                              <button type="submit" class="btn btn-sm btn-info float-left" name="save" id="save">Submit</button>
                              <a class="btn btn-sm btn-outline-info float-right" href="<?= BASEURL; ?>/invoice/sovana">Cetak</a>
                              <!-- <button type="button" class="btn btn-sm btn-outline-danger float-start" id="hapusData">Hapus</button> -->
                         </div>
                    </form>
               </div>
          </div>
     </div>
     <!-- kanan -->
     <div class="col-lg-5  animate__animated " id="card-kanan">
          <div class="card shadow">               
               <div class="card-header">
                    <div class="text-bold"><i class="fa-solid fa-users-between-lines"></i> <?= number_format($data['totalHariIni'], 0, ',', '.'); ?></div>
               </div>
               <div class="card-body">
                    <table class="table table-striped" id="table-gaji" width="100%">
                         <thead>
                              <tr>
                                   <th class="col-sm-2">Nama</th>
                                   <th class="col-sm-2">Item</th>
                                   <th class="col-sm-3">Description</th>
                                   <th>Cost</th>
                                   <th>Qty</th>
                                   <th>Total</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach ($data['invSovana'] as $invS) : ?>
                                   <tr>

                                        <td class="text-capitalize"><?= $invS['tanggal']; ?></td>
                                        <td class="col-sm-2 text-capitalize"><?= $invS['item']; ?></td>
                                        <td class="text-capitalize"><?= $invS['description']; ?></td>
                                        <td class="text-bold"><?= number_format($invS['cost'], 0, ',', '.'); ?></td>
                                        <td><?= $invS['qty']; ?></td>
                                        <td class="text-bold"><?= number_format($invS['total'], 0, ',', '.'); ?></td>
                                        <td><a href="<?= BASEURL; ?>/form/hapusBreakdown/<?= $invS['id']; ?>" class="text-danger delete-icon icon" onclick="return confirm('Yakin Mau menghapus data ini ??');"> <i class="fa-solid fa-user-slash"></i></a></td>
                                   </tr>
                              <?php endforeach; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
     $(document).ready(function() {
          $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
          $('#table-gaji').DataTable();
          $('#table-gaji').on('mouseenter', 'tr', function() {
               $(this).find('.icon').show();
          }).on('mouseleave', 'tr', function() {
               $(this).find('.icon').hide();
          });

         

          $('#table-data tbody').on('click', 'tr', function() {
               // Get data from the clicked row
               var customer = $(this).data('nama_customer');
               var style = $(this).data('style');
               var code = $(this).data('code');
               var size = $(this).data('size');
               var warna = $(this).data('warna');
               var jmlh = $(this).data('qty');

               // Default values
               var harga = $(this).data('harga');
               var jahit = $(this).data('jahit');
               var naskat = $(this).data('naskat');
               var motong = $(this).data('motong');
               var isi = 0;

               // Check the value of #nama
               // Mendapatkan nilai yang dipilih dari dropdown
               


               // Set the values to the input fields
               $('#customer').val(customer);
               $('#style').val(style);
               $('#code').val(code);
               $('#size').val(size);
               $('#warna').val(warna);
               $('#qty').val(jmlh);

               // Set #harga based on the value of #nama
               $('#harga').val(harga);
               calculateTotal();
          });
          var isi = 0;
          $('#total').val();
          $('#qty').change(function() {
               var harga = parseFloat($('#harga').val());
               var jumlah = parseFloat($('#qty').val());
               var total = harga * jumlah;
               $('#total').val(total);
               calculateTotal();
          });

          // Menghitung total saat nilai harga diubah
          $('#harga').change(function() {
               var harga = parseFloat($('#harga').val());
               var jumlah = parseFloat($('#qty').val());
               var total = harga * jumlah;
               $('#total').val(total);
               calculateTotal();
          });

          // Calculate total
          function calculateTotal() {
               var jumlah = parseInt($('#qty').val() || 0); // Handle empty input
               var harga = parseFloat($('#harga').val().replace(/[^0-9.-]+/g, ''));
               var total = jumlah * harga;
               $('#total').val(total);
          }

          // Handle input change event for jumlah and harga
          $('#qty, #harga').on('input', function() {
               calculateTotal();
          });

          var table = $('#table-gaji').DataTable();
               // var nm = $('#namaNya');
               var total = table
               .column(5, { search: 'applied' }) // 5 adalah indeks kolom 'total', sesuaikan jika perlu
               .data()
               .reduce(function (acc, val) {
                    // Bersihkan format angka dan tambahkan ke total
                    var cleanTotal = parseFloat(val.replace(/[^0-9.-]+/g, '')) || 0;
                    return acc + cleanTotal;
               }, 0);

               // Tampilkan total
               // $('#totalByNama').text(total);
               $('#jumlahGaji').text(total.toLocaleString('id-ID')); // Format angka sesuai dengan bahasa Indonesia
     });
</script>