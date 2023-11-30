
<?php 
require_once 'update.php';
if (isset($_POST['update'])) {
    if (updateSample($_POST) > 0) {
        echo "<script>
        new Noty({
            type: 'success',
            theme: 'nest',
            layout: 'topRight',
            text: 'Data Berhasil di Update',
            timeout: 3000 
        }).show();
        </script>";
    } else {
        echo "<script>
        new Noty({
            type: 'error',
            theme: 'nest',
            layout: 'topRight',
            text: 'Data GAGAL di Edit',
            timeout: 3000 
        }).show();
        </script>";
    }
}
?>
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

    /* .animate__animated {
        --animate-duration: 2s;
    } */

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
<div class="row justify-content-center">
    <div class="col-lg-3  animate__animated collapse mb-5 px-3" id="card-kiri">
        <div class="card ">
            <div class="card-header bg-secondary">Add & Edit Data Sample</div>
            <div class="card body p-3">
                <form action="<?= BASEURL; ?>/sample/tambah" class="form-horizontal text-bold" method="post" enctype="multipart/form-data" id="formId">
                    <!-- <div class="card-body"> -->
                        <input type="hidden" name="id" id="id">
                    <div class="form-group form-group-sm row mb-2">
                        <input type="hidden" name="gambarSebelumnya" id="gambarSebelumnya">
                        <label class="col-sm-5" for="bulan">Finish</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control form-control-border border-width-2" name="tanggal" id="tanggal">
                        </div>
                    </div>
                    <div class="form-group row shadow-sm mb-2">
                        <label class="col-sm-5 pb-0" for="nama_customer">Customer</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm form-control-border border-width-2" id="nama_customer" name="nama_customer">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="style">Style</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="style" name="style">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="code">Code</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="code" name="code">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="warna">Color</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="warna" name="warna">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="size">Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="size" name="size">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="harga">Cost</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control form-control-border border-width-2" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="habis">Penghabisan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="habis" name="habis">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="acc_1">Acc 1</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="acc_1" name="acc_1">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm mb-2">
                        <label class="col-sm-5" for="acc_2">Acc 2</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="acc_2" name="acc_2">
                        </div>
                    </div>

                    <div class="form-group row mb-3 shadow-sm mb-2">
                        <label class="col-sm-5" for="Naskat">Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control text-capitalize" rows="3" style="font-size: 11px; width: 100%;" name="keterangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-2 mt-1 justify-content-center">
                        <div class=" justify-content-center">
                            <div class="form-group row mb-2 mt-1 justify-content-center">
                                <div class="text-center">
                                    <img src="<?= BASEURL; ?>/images/nophoto.jpg" class="mb-1" id="gambarLama" width="100px" height="140px"><br>
                                    <input type="file" id="gambar" name="gambar">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="">
                        <div class="text-center" id="tombol">
                            <button type="submit" class="btn btn-sm btn-primary float-end mx-1" id="update" name="update">Update</button> &nbsp; &nbsp;
                            <button type="submit" class="btn btn-sm btn-info float-start" id="save" name="save">Save | Tambahkan</button> &nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 animate__animated animate__backInUp">
        <table id="dataTable" class="table table-striped" style="width:100%">
            <?php require_once 'tableSample.php' ?>
        </table>
    </div >
</div>

<script>
    $(document).ready(function() {
        $('#save').click(function() {
            // Mengganti nilai atribut action menjadi <?= BASEURL; ?>/sample/tambah
            $('#formId').attr('action', '<?= BASEURL; ?>/sample/tambah');
        });

        // Aksi ketika tombol "Update" diklik
        $('#update').click(function() {
            // Mengganti nilai atribut action menjadi #
            $('#formId').attr('action', '<?= BASEURL; ?>/sample/update');
        });


        $('.tambah').on('click', function() {
            $('#update').addClass('collapse');
            $('#card-kiri').removeClass('collapse');
            $('#card-kiri').addClass('animate__backInDown');
            $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
        });
        $('#dataTable').on('mouseenter', 'tr', function() {
            $(this).find('.icon').show();
        }).on('mouseleave', 'tr', function() {
            $(this).find('.icon').hide();
        });

        $(document).on('click', '.editSample', function(e) {
            $('#card-kiri').removeClass('collapse');
            $('#card-kiri').addClass('animate__bounce');
            $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: '<?= BASEAPI; ?>/sample.php?id=' + id,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json', // Tambahkan ini jika diperlukan oleh server
                success: function(response) {
                    console.log(response);
                    // Mengisi nilai formulir dengan data yang diterima
                    $('#id').val(response.id);
                    $('#tanggal').val(response.tanggal);
                    $('#nama_customer').val(response.nama_customer);
                    $('#style').val(response.style);
                    $('#code').val(response.code);
                    $('#size').val(response.size);
                    // $('#bahan').val(response.bahan);
                    $('#warna').val(response.warna);
                    // $('#qty').val(response.qty);
                    $('#harga').val(response.harga);
                    $('#habis').val(response.habis);
                    // $('#motong').val(response.motong);
                    // $('#naskat').val(response.naskat);
                    // $('#status').val(response.status);
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

        // Fungsi untuk memuat data terbaru dan memperbarui tabel
        function reloadData() {
            $.ajax({
                url: '<?= BASEAPI; ?>/sample.php', // Gantilah dengan URL ke endpoint API Anda
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Mengosongkan tbody tabel
                    $('#tableNya').empty();

                    // Menambahkan baris baru dengan data terbaru
                    $.each(data, function(index, sample) {
                        var newRow = '<tr>' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + sample.tanggal + '</td>' +
                            '<td>' + sample.nama_customer + '</td>' +
                            '<td>' + sample.code + '</td>' +
                            '<td>' + sample.style + '</td>' +
                            '<td>' + sample.warna + '</td>' +
                            '<td><img src="../../../../img-produksi/' + sample.gambar + '" class="zoom" width="28px" height="32px"></td>' +
                            '<td class="text-large">' +
                            (sample.harga == '0' ?
                                '<img src="images/proses.gif" width="30">' :
                                '<button type="button" class="btn btn-sm btn-outline-none"  data-toggle="tooltip" data-placement="top" title="Sudah dibayar"><img src="images/coffee.png" width="24"></button>') +
                            '</td>' +
                            '<td class="px-2">' +
                            '<div class="d-flex">' +
                            '<a href="#" class="text-primary editSample icon" data-id="' + sample.id + '"><i class="fa-solid fa-file-pen icon"></i></a> &nbsp;' +
                            '<a href="<?= BASEURL; ?>/sample/hapus/' + sample.id + '" class="text-danger float-end delete-icon icon" onclick="return confirm(\'Yakin Mau menghapus data ini ??\');"><i class="fa-solid fa-trash-can icon"></i></a>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                        $('#tableNya').append(newRow);
                    });
                    
                },
                error: function(error) {
                    console.log('Error fetching data:', error);
                }
                        // Panggil fungsi reloadData pada saat dokumen siap
//         reloadData();

// // Atur interval untuk memuat data secara berkala (misalnya, setiap 5 detik)
// setInterval(reloadData, 5000);
            });
        }





    })
</script>