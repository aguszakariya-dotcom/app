<style>
    .content {
        /* font-size: smaller; */
        font-family: 'Times New Roman', Times, serif;
        /* background-image: url('https://wallpapers.com/images/featured-full/sexy-body-txdajxjfip2a9txg.jpg'); */
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

    .animate__animated {
        --animate-duration: 2s;
    }

    .table {
        font-size: smaller;
        font-family: 'Times New Roman', Times, serif;
    }

    .table td {
        font-size: 12px;
    }

    .table th {
        font-size: 16px;
    }

    .icon {
        display: none;
        font-size: large;
    }
</style>
<?php
$koneksi = mysqli_connect('becik.my.id:3306', 'akuntansi_ok', '123/akuntansi', 'akuntansi');
?>
<div class="row justify-content-center pt-3 ml-5">
    <div class="col-lg-3  animate__animated collapse" id="card-kiri">
        <div class="card ">
            <div class="card-header text-center">
                <span>Input data Produksi</span>
            </div>
            <form action="<?= BASEURL; ?>/produksi/tambah" class="form-horizontal" method="post" enctype="multipart/form-data" id="formId">
                <div class="card-body">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" class="custom-file-input" id="gambarSebelumnya" name="gambarSebelumnya">
                    <div class="form-group form-group-sm row shadow-sm">
                        <label class="col-sm-5" for="bulan">Finish</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control form-control-border border-width-2" id="bulan" name="bulan">
                        </div>
                    </div>
                    <div class="form-group row shadow-sm">
                        <label class="col-sm-5 pb-0" for="nama_customer">Customer</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm form-control-border border-width-2" id="nama_customer" name="nama_customer">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="style">Style</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="style" name="style">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="code">Code</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="code" name="code">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="bahan">Fabric</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="bahan" name="bahan">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="size">Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="size" name="size">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="warna">Color</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="warna" name="warna">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="qty">Jumlah</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="qty" name="qty">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="harga">Cost Sample</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="jahit">Cost Tailor</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="jahit" name="jahit">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="potong">Cost Cutting</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="motong" name="motong">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="naskat">Cost Naskat</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="naskat" name="naskat">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="status">Status</label>
                        <div class="col-sm-7">
                            <select class="form-control form-control-border border-width-2 select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" id="status" name="status">
                                <option selected="selected">Proses</option>
                                <option>Finish</option>
                                <!-- <option>California</option> -->
                                <option>Menunggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3 shadow-sm">
                        <label class="col-sm-5" for="Naskat">Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control text-capitalize" rows="3" style="font-size: 11px; width: 100%;" name="keterangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-2 mt-1 justify-content-center">
                        <div class=" justify-content-center">
                            <img src="./img/nophoto.jpg" class="mb-1" id="gambarLama" onerror="if (this.src != 'img/nophoto.jpg') this.src = 'img/nophoto.jpg';" width="100px" height="140px"> <br>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file text-xs">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        
                                    </div>
                                    <div class="input-group-append">
                                        <!-- <span class="input-group-text">Upload</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center" id="tombol">&nbsp; &nbsp;
                        <button type="submit" class="btn btn-sm btn-info float-end mx-1" id="update" name="update">Update</button> &nbsp; &nbsp;
                        <button type="submit" class="btn btn-sm btn-info float-start" id="save">Save | Tambahkan</button> &nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-9 animate__animated animate__headShake">
        
        <table id="dataTable" class="table table-bordered table-striped table-hover">
            <?php require_once 'tableProduksi.php' ?>
        </table>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#save').click(function() {
            // Mengganti nilai atribut action menjadi <?= BASEURL; ?>/sample/tambah
            $('#formId').attr('action', '<?= BASEURL; ?>/produksi/tambah');
        });

        // Aksi ketika tombol "Update" diklik
        $('#update').click(function() {
            // Mengganti nilai atribut action menjadi #
            $('#formId').attr('action', '<?= BASEURL; ?>/produksi/update');
        });
        

        $('#dataTable').on('mouseenter', 'tr', function() {
            $(this).find('.icon').show();
        }).on('mouseleave', 'tr', function() {
            $(this).find('.icon').hide();
        });
        $('#delete-akun').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: '<?= BASEURL; ?>/akuntansi/hapus',
                success: function(response) {
                    // alert ('ok');
                }
            })
        })

        $(document).on('click', '.editProduksi', function(e) {
            $('#card-kiri').removeClass('collapse');
            $('#card-kiri').addClass('animate__backInDown');
            $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: '<?= BASEAPI; ?>/produksi.php?id=' + id,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json', // Tambahkan ini jika diperlukan oleh server
                success: function(response) {
                    console.log(response);
                    // Mengisi nilai formulir dengan data yang diterima
                    $('#id').val(response.id);
                    $('#bulan').val(response.bulan);
                    $('#nama_customer').val(response.nama_customer);
                    $('#style').val(response.style);
                    $('#code').val(response.code);
                    $('#size').val(response.size);
                    $('#bahan').val(response.bahan);
                    $('#warna').val(response.warna);
                    $('#qty').val(response.qty);
                    $('#harga').val(response.harga);
                    $('#jahit').val(response.jahit);
                    $('#motong').val(response.motong);
                    $('#naskat').val(response.naskat);
                    $('#status').val(response.status);
                    $('#keterangan').val(response.keterangan);
                    $('#gambarSebelumnya').val(response.gambar);

                    // Menampilkan gambar di elemen img
                    $('#gambarLama').attr('src', 'http://localhost/img-produksi/' + response.gambar);

                    // $('#gambar').attr('src', 'https://raw.githubusercontent.com/aguszakariya-dotcom/img-produksi/main/' + response.gambar);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
        $(document).on('change', '#gambar', function(e) {
            // Menampilkan gambar baru di elemen img
            var input = e.target;
            var reader = new FileReader();
            reader.onload = function() {
                $('#gambarLama').attr('src', reader.result);
            };
            reader.readAsDataURL(input.files[0]);
        });
        // Fungsi untuk menangani klik tombol Save | Tambahkan


    })
</script>