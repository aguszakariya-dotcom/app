


<div class="row mt-5 mb-5 justify-content-center animate__animated fadeIndownBig">
    <div class="col-lg-5 ">
        <div class="card card-secondary">
            <div class="card-header "><i data-feather="plus-circle" class="text-light tambahAkun"></i></div>
            <div class="card-body">
                <div class=" table table-bordered mb-2 p-2 collapse animate__animated animate__backInLeft">
                    <form action="<?= BASEURL; ?>/akuntansi/tambahAkun"           method="post"id="FormAkun">
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="namaAkun">Nama Akun</label>
                                <input type="text" class="form-control text-capitalize" name="namaAkun" id="namaAkun">
                            </div>
                            <div class="col-sm-3">
                                <label for="rincian">Klasifikasi</label>
                                <select class="form-control form-select form-select-sm" aria-label="Small select example" name="klasifikasi" id="klasifikasi">
                                <option selected>Pilih</option>
                                <option value="Aset">Aset</option>
                                <option value="Utang">Utang</option>
                                <option value="Modal">Modal</option>
                                <option value="Pendapatan">Pendapatan</option>
                                <option value="Beban">Beban</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <label for="noAkun">Nomer Akun</label>
                                <input type="number" class="form-control" name="noAkun" id="noAkun">
                            </div>
                            <div class="col-sm-2">
                                <label for="saldoNormal">Saldo Normal</label>
                                <select class="form-control form-select form-select-sm" aria-label="Small select example" name="saldoNormal" id="saldoNormal">
                                <option selected>Pilih</option>
                                <option value="Debit">Debit</option>
                                <option value="Kredit">Kredit</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary m-2">Tambah Akun</button>                    
                    </form>
                </div>
                <table id="table-akun" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th> No. Akun</th>
                            <th>Nama Akun</th>
                            <th>klasifikasi</th>
                            <th>Saldo Normal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach( $data['akun'] as $akun) : ?>
                        <tr>
                            <td><?= $akun['noAkun']; ?></td>
                            <td class="text-capitalize"><?= $akun['namaAkun']; ?></td>
                            <td class="text-capitalize"><?= $akun['klasifikasi']; ?></td>
                            <td class="text-capitalize"><?= $akun['saldoNormal']; ?></td>
                            <td>
                                <!-- Tambahkan link untuk ikon "trash-2" -->
                                <a href="<?= BASEURL; ?>/akuntansi/hapusAkun/<?= $akun['id']; ?>" class="text-danger delete-icon"><i data-feather="trash-2" class="icon"></i></a>                                
                            </td>                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
<!-- batas isi  -->
</div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    
  </aside>
  <!-- /.control-sidebar Kanan-->
<style>
    .delete-icon .icon {
        display: none;
    }
</style>
<script>
    $(document).ready(function() {
        $('.tambahAkun').on('click', function() {
            $('#namaAkun').css('border-color', 'blue');
        $('.collapse').show(200);
        })

        

        // Menampilkan ikon saat dihover dan menghilangkan saat tidak
    $('#table-akun').on('mouseenter', 'tr', function () {
            $(this).find('.icon').show();
        }).on('mouseleave', 'tr', function () {
            $(this).find('.icon').hide();
        });
        $('#delete-akun').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: '<?= BASEURL; ?>/akuntansi/hapus',
                success: function (response) {
                    // alert ('ok');
                }
            })
        })


});

</script>