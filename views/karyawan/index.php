<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title">Data Karyawan</h4>
            <div class="float-right"><a href="#" id="detil"><h5>Details <i class="fa-solid fa-right-to-bracket"></i></h5></a></div>
          </div>
          <div class="card-body">
            <div>
              <div class="btn-group w-100 mb-2" id="jabatan-filter-group">
                <!-- Elemen filter akan ditambahkan di sini oleh skrip jQuery -->
              </div>
            </div>
            <div class="filter-container p-0 row" id="employee-container" height="150px">
              <!-- Elemen filtr-item akan ditambahkan di sini oleh skrip jQuery -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 collapse" id="data">
        <div class="card card-secondary">
          <div class="card-header"></div>
          <div class="card-body">
            <table class="table table-striped table-bordered">
              <thead>
                <tr style="font-size: medium;">
                  <th style="width: 10px;">No.</th>
                  <th  class="col-2">Nama</th>
                  <th>jabatan </th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Gambar</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($data['karyawan'] as $kry) :
                ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $kry['nama']; ?></td>
                  <td><?= $kry['jabatan']; ?></td>
                  <td><?= $kry['alamat']; ?></td>
                  <td><?= $kry['email']; ?></td>
                  <td><?= $kry['telepon']; ?></td>
                  <td>
                    <img src="<?= BASEURL; ?>/imgTeam/<?= $kry['gambar']; ?>" style="height: 30px; width: 24px">
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<style>
  .img-thumbnail{
    height: 280px;
    width: 400px;
  }
</style>
<script>
  $(document).ready(function() {
    $('#detil').click(function() {
      $('#data').removeClass('collapse')
    })
    // Mengambil data dari API
    $.getJSON('<?= BASEAPI; ?>/karyawan.php', function(data) {
      // Mengumpulkan daftar jabatan unik


      // Loop melalui setiap karyawan
      $.each(data, function(index, karyawan) {
        // Membuat elemen filtr-item untuk setiap karyawan
        var filtrItem = $('<div class="filtr-item col-sm-2" data-category="' + karyawan.jabatan + '" data-sort="' + karyawan.jabatan + ' ">');
        filtrItem.append('<a href="<?= BASEURL; ?>/imgTeam/' + karyawan.gambar + '" data-toggle="lightbox" data-title=" ' + karyawan.nama + '"><img src="<?= BASEURL; ?>/imgTeam/' + karyawan.gambar + '" class="img-fluid mb-2 img-thumbnail" width="150px" height="200px"/></a>');

        // Menambahkan elemen filtr-item ke container
        $('#employee-container').append(filtrItem);
      });

      // Inisialisasi Lightbox setelah mengganti gambar
      $('[data-toggle="lightbox"]').lightbox();
    });
  });
</script>


<!-- Page specific script -->
<script>
  $(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({
      gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>