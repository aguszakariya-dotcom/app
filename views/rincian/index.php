<!-- Main content -->
<section class="content px-5">
  <div class="container-fixed justify-content-center pb-5">
    <div class="card card-secondary mb-5">
      <div class="card-header"><i data-feather="plus-circle" class="text-light tambahRincian"></i></div>
      <div class="card-body justify-content-center">
        <div class="table-sm table-bordered mb-3 py-2 px-5 collapse animate__animated animate__backInUp table-form">
          <form action="<?= BASEURL; ?>/rincian/tambahRincian" method="post" id="FormRincian">
            <div class="row mb-3 mt-2">
              <div class="col-sm-6">
                <label for="ket1">keterangan Transaksi</label>
                <input type="text" class="form-control borCol text-capitalize" name="ket1" id="ket1">
              </div>
              <div class="col-sm-4">
                <label for="ket1">Kategori Transaksi</label>
                <select class="custom-select form-control form-select-sm shadow borCol" aria-label="Small select example" name="klasifikasi" id="klasifikasi">
                  <option selected></option>
                </select>                
              </div>
            </div>
            <div class="row mb-3">              
              <div class="col-sm-4">
                <label for="namAkun1">Nama Akun</label>
                <select class="custom-select form-control form-select-sm" aria-label="Small select example" name="namAkun1" id="namAkun1">
                  <option selected>pilih</option>
                </select>
              </div>
              <div class="col-sm-3">
                <label for="noAkun1">Nomer Akun</label>
                <input type="text" class="form-control" name="noAkun1" id="noAkun1">
              </div>
              <div class="col-sm-3">
                <label for="saldoNorma1l">Saldo Normal</label>
                <input type="text" class="form-control" name="saldoNormal1" id="saldoNormal1">
              </div>
            </div>
              <!-- baris ke 2 -->
            <div class="row mb-3 ">
              <div class="col-sm-4">
                <label for="namAkun2">Nama Akun</label>
                <select class="custom-select form-control form-select-sm" aria-label="Small select example" name="namAkun2" id="namAkun2">
                  <option selected>pilih</option>
                </select>
                <div class="imbuhBaris btn btn-sm mt-2"><i data-feather="edit" id="imbuhBaris"></i>Tambah baris</div>
              </div>
              <div class="col-sm-3">
                <label for="noAkun2">Nomer Akun</label>
                <input type="text" class="form-control" name="noAkun2" id="noAkun2">
              </div>
              <div class="col-sm-3">
                <label for="saldoNormal2">Saldo Normal</label>
                <!-- <input type="text" class="form-control" name="saldoNormal2" id="saldoNormal2"> -->
                <select class="form-control" name="saldoNormal2" id="saldoNormal2">
                  <option selected></option>
                  <option value="Debit">Debit</option>
                  <option value="Kredit">Kredit</option>
                </select>
              </div>
            </div>
                <!-- baris ke 3 -->
            <div class="row mb-3 animate__animated animate__zoomOut" id="baris3">
              <input type="hidden" class="form-control" name="ket3" id="ket3">
              <div class="col-sm-4">
                <label for="namAkun3">Nama Akun</label>
                <select class="custom-select form-control form-select-sm" aria-label="Small select example" name="namAkun3" id="namAkun3">
                  <option selected></option>
                </select>
              </div>
              <div class="col-sm-3">
                <label for="noAkun3">Nomer Akun</label>
                <input type="text" class="form-control" name="noAkun3" id="noAkun3">
              </div>
              <div class="col-sm-3">
                <label for="saldoNormal3">Saldo Normal</label>
                <!-- <input type="text" class="form-control" name="saldoNormal3" id="saldoNormal3"> -->
                <select class="form-control" name="saldoNormal3" id="saldoNormal3">
                  <option selected></option>
                  <option value="Debit">Debit</option>
                  <option value="Kredit">Kredit</option>
                </select>
              </div>
            </div>

            <!-- batas form input -->
            <button type="submit" class="btn btn-sm btn-primary mt-2">Tambah Rincian</button>
          </form>
        </div>
        <table class="table table-sm table-striped table-bordered animate__animated animate__bounce" id="rincianTransaksiTable">
          <thead>
            <tr>
              <th>No. </th>
              <th>Rincian Transaksi</th>
              <th>Nama Akun</th>
              <th>No. Akun</th>
              <th>Saldo Normal</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1 ?>
            <?php foreach ($data['rincian'] as $rincian) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $rincian['ket1']; ?></td>
                <td><?= $rincian['namAkun1']; ?></td>
                <td><?= $rincian['noAkun1']; ?></td>
                  <td><?= $rincian['saldoNormal1']; ?></td>
                  <td><a href="<?= BASEURL; ?>/rincian/hapusPola/<?= $rincian['id']; ?>" class="text-danger delete-icon" id="delete-polaTransaksi" ><i data-feather="trash-2" class="icon"></i></a></td>
                  <tr></tr>              
                <td></td>
                <td><?= $rincian['ket1']; ?></td>
                <td><?= $rincian['namAkun2']; ?></td>
                <td><?= $rincian['noAkun2']; ?></td>
                <td><?= $rincian['saldoNormal2']; ?></td>
                
                <tr></tr>              
                <td></td>
                <td><?= $rincian['ket3']; ?></td>
                <td><?= $rincian['namAkun3']; ?></td>
                <td><?= $rincian['noAkun3']; ?></td>
                <td>
                  <?= $rincian['saldoNormal3']; ?>
                  <!-- Tambahkan link untuk ikon "trash-2" -->                 

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<script>
  $(document).ready(function() {
    $('#rincianTransaksiTable').on('mouseenter', 'tr', function () {
            $(this).find('.icon').show();
        }).on('mouseleave', 'tr', function () {
            $(this).find('.icon').hide();
        });
        // $('#delete-polaTransaksi').on('click', function(e) {
        //     e.preventDefault();
        //     var id = $(this).data('id');
        //     $.ajax({
        //         type: 'POST',
        //         url: '<?= BASEURL; ?>/rincian/hapusPola',
        //         success: function (response) {
        //         }
        //     })
        // })
  })
</script>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<style>
    .borCol {
        border: 2px solid #0962A0;        
    }
    .imbuhBaris {
      border-bottom: 1px solid blue;
      
    }
  .delete-icon .icon {
    display: none;
    /* Menyembunyikan ikon secara default */
  }

</style>

<script>
  $(document).ready(function() {
    $('.tambahRincian').on('click', function() {
      $('.collapse').show(200);
      $("#ket1").addClass("borCol shadow animate__animated animate__heartBeat")
      $("#klasifikasi").removeClass("borCol shadow animate__animated animate__heartBeat")
      
    })
    // 1. setelah selesai menulis keterangan
    $("#ket1").on("change", function() {
      $("#ket1").removeClass(" borCol shadow animate__animated animate__heartBeat");
      $("#klasifikasi").addClass("borCol shadow animate__animated animate__heartBeat")
    })
       
    // menampilkan klasifikasi dengan filter 1
    var apiData; // Membuat variabel untuk menyimpan data dari API

    $.getJSON("<?= BASEAPI; ?>/akun.php", function(data) {
      apiData = data; // Mengambil data dari API dan menyimpannya dalam variabel apiData

      var uniqueValues = []; // Objek untuk menyimpan nilai klasifikasi unik

      // Loop melalui data untuk mendapatkan nilai yang unik
      apiData.forEach(function(item) {
        if (uniqueValues.indexOf(item.klasifikasi) === -1) {
          uniqueValues.push(item.klasifikasi);
        }
      });

      // Membuat opsi pilihan (select option) dengan nilai yang unik
      var selectOptions = "<option selected>Pilih kategori ..</option>";
      uniqueValues.forEach(function(value) {
        selectOptions += "<option value='" + value + "'>" + value + "</option>";
      });

      // Mengganti opsi pilihan di elemen select di halaman
      $("#klasifikasi").html(selectOptions);
    });

    $("#klasifikasi").on("change", function() {
      var pilihanKlasi = $(this).val(); 
      $("#namAkun1").addClass("borCol shadow animate__animated animate__heartBeat")
      $("#namAkun1").focus();
      var klasiData = apiData.filter(function(item) {
        return item.klasifikasi === pilihanKlasi;
      });

      // Mengisi option pada #namAkun1 dan #namAkun2 berdasarkan klasifikasi yang dipilih
      klasiData.forEach(function(item, index) {
        $("#namAkun1" + (index + 1)).val(item.namAkun);
        $("#namAkun2" + (index + 1)).val(item.namAkun);
        $("#namAkun3" + (index + 1)).val(item.namAkun);
        // Lakukan hal lain sesuai kebutuhan
      });
    });

    $("#klasifikasi").on("change", function() {      
      var pilKlasi = $(this).val();
      var pNama1 = $("#namAkun1");
      var pilhanNa2 = $("#namAkun2");
      // var pilhanNa3 = $("#namAkun3");
      var noAkunElement1 = $("#noAkun1");
      var noAkunElement2 = $("#noAkun2");
      var noAkunElement3 = $("#noAkun3");
      var saldElement1 = $("#saldoNormal1");
      var saldElement2 = $("#saldoNormal2");
      // var saldElement3 = $("#saldoNormal3");

      pNama1.empty();
      pilhanNa2.empty();
      // pilhanNa3.empty();
      pNama1.append('<option selected>Pilih</option>');
      pilhanNa2.append('<option selected>Pilih</option>');
      // pilhanNa3.append('<option selected>Pilih</option>');

      apiData.forEach(function(item) {
        if (item.klasifikasi === pilKlasi) {
          pNama1.append('<option value="' + item.namaAkun + '">' + item.namaAkun + '</option>');
        }
        pilhanNa2.append('<option value="' + item.namaAkun + '">' + item.namaAkun + '</option>');
        // pilhanNa3.append('<option value="' + item.namaAkun + '">' + item.namaAkun + '</option>');
      });
    })

      $("#namAkun1").on("change", function() {
        $("#namAkun2").addClass("borCol shadow animate__animated animate__heartBeat")
        $("#namAkun1").removeClass("borCol shadow animate__animated animate__heartBeat")
        var nama1 = $("#namAkun1").val();
        var saldo1 = "";
        var noAkun1 = "";
        var isiNo1 = $("#noAkun1");
        var isiSaldo1 = $("#saldoNormal1");
        apiData.forEach(function(item) {
          if(item.namaAkun === nama1) {
            noAkun1 = item.noAkun;
            saldo1 = item.saldoNormal;
            isiSaldo1.val(saldo1);
            isiNo1.val(noAkun1);

          }

        })
        $("#namAkun2").focus();
      });

      // $("#namAkun3").val("");
      $("#namAkun2").on("change", function() {
        $("#namAkun2").removeClass("borCol shadow animate__animated animate__heartBeat")
        var nama2 = $("#namAkun2").val();
        var saldo2 = "";
        var noAkun2 = "";
        var isiNo2 = $("#noAkun2");
        var isiSaldo2 = $("#saldoNormal2");
        apiData.forEach(function(item) {
          // console.log(nama2)
          if(item.namaAkun === nama2) {
            noAkun2 = item.noAkun;
            saldo2 = item.saldoNormal;
            isiNo2.val(noAkun2);
            isiSaldo2.val(saldo2);
          }
        })

        $(".imbuhBaris").on("click", function() {
          $("#namAkun3").addClass("borCol shadow animate__animated animate__heartBeat")
          $('#baris3').removeClass("animate__animated animate__zoomOut")
          $('#baris3').addClass("animate__animated animate__zoonIn")
          $('.imbuhBaris').addClass("collapse")

          var pilhanNa3 = $("#namAkun3");
          var saldElement3 = $("#saldoNormal3");
          pilhanNa3.empty();
          pilhanNa3.append('<option selected>Pilih</option>')
          apiData.forEach(function(item) {
            pilhanNa3.append('<option value="' + item.namaAkun + '">' + item.namaAkun + '</option>');
          })


        });
      });

    
      
      $("#namAkun3").on("change", function() {
        var ket1 = $("#ket1").val();
        var isiKet3 = $("#ket3");
        isiKet3.val(ket1);
        $("#namAkun3").removeClass("borCol shadow animate__animated animate__heartBeat")
        var nama3 = $("#namAkun3").val();
        var saldo3 = "";
        var noAkun3 = "";
        var isiNo3 = $("#noAkun3");
        var isiSaldo3 = $("#saldoNormal3");
        apiData.forEach(function(item) {
          if(item.namaAkun === nama3) {
            noAkun3 = item.noAkun;
            saldo3 = item.saldoNormal;
            isiSaldo3.val(saldo3);
            isiNo3.val(noAkun3);

          }

        })
      });
    



  });


</script>