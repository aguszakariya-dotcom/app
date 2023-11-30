<style>
    .content {
        font-size: smaller;
        font-family: 'Times New Roman', Times, serif;
        background-image: url('https://img.freepik.com/free-vector/abstract-colorful-technology-dotted-wave-background_1035-17450.jpg');
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

    .icon {
        display: none;
    }
</style>
<div class="row justify-content-center">
    <div class="col-3 kiri">
        <div class="card ">
            <div class="card-header text-center">
                <h3 class="card-title">Input Data Produksi</h3>
                <div class="card-tools">
                    <span class="badge badge-primary ambilData">Ambil Data Produksi</span>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= BASEURL; ?>/produksi/tambahProduksi" class="form-horizontal text-bold" method="post" enctype="multipart/form-data">
                    <!-- <div class="card-body"> -->
                    <div class="form-group form-group-sm row shadow-sm">
                        <label class="col-sm-5" for="bulan">Finish</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control form-control-border border-width-2" name="bulan" id="bulan">
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
                        <label class="col-sm-5" for="size">Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="size" name="size">
                        </div>
                    </div>
                    <div class="form-group row mb-1 shadow-sm">
                        <label class="col-sm-5" for="bahan">Fabric</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-border border-width-2" id="bahan" name="bahan">
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
                        <label class="col-sm-5" for="motong">Cost Cutting</label>
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
                        <label class="col-sm-5" for="Naskat">Status</label>
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
                            <img src="<?= BASEURL; ?>/img/nophoto.jpg" class="mb-1" id="gambar" width="100px" height="140px"><br>
                            <input type="hidden" id="gambarLama" name="gambarLama">
                            <div class="input-group">
                                <div class="custom-file text-xs">
                                    <input type="file" class="custom-file-input" id="ambilGambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                </div>
                                <div class="input-group-append">
                                    <!-- <span class="input-group-text">Upload</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="card-footer">
                        <div class="text-center" id="tombol">
                            <button type="submit" class="btn btn-sm btn-info float-end mx-1" id="update" name="update">Update</button> &nbsp; &nbsp;
                            <button type="submit" class="btn btn-sm btn-info float-start" id="save" name="save">Save | Tambahkan</button> &nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9  animate__animated animate__backInRight" id="card-kanan">
        <div class="card ">
            <div class="card-header"><i data-feather="plus-circle" class="tambah"></i></div>
            <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th class="col-sm-2">Date</th>
                            <th class="col-sm-2">Customer</th>
                            <th>Code</th>
                            <th>Style</th>
                            <th>Warna</th>
                            <th>QTY</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody id="tableIsi">
                        <?php $no = 1; ?>
                        <?php foreach ($data['produksi'] as $produksi) : ?>
                            <tr>
                                <th class=""><?= $no++ ?></th>
                                <td class="text-capitalize"><?= tgl_kita($produksi['bulan']); ?></td>
                                <td class="text-capitalize"><?= $produksi['nama_customer']; ?></td>
                                <td><?= $produksi['code']; ?></td>
                                <!-- <td ><?= $produksi['code']; ?></td> -->
                                <td class=" col-sm-2 text-capitalize"><?= $produksi['style']; ?></td>
                                <td class="text-capitalize"><?= $produksi['warna']; ?></td>
                                <td><?= $produksi['qty']; ?></td>
                                <td class="">
                                    <img src="<?= BASEURL; ?>/img/<?= $produksi['gambar']; ?>" alt="" height="30" width="22" class=" zoom">
                                </td>
                                <td class="text-capitalize">
                                    <span class="badge <?php
                                                        if ($produksi['status'] === 'Proses') {
                                                            echo 'badge-warning';
                                                        } elseif ($produksi['status'] === 'Finish') {
                                                            echo 'badge-success';
                                                        } elseif ($produksi['status'] === 'Menunggu') {
                                                            echo 'badge-danger';
                                                        }
                                                        ?>">
                                        <?= $produksi['status']; ?>
                                    </span>
                                </td>
                                <td>
                                    <!-- Tambahkan link untuk ikon "trash-2" -->
                                    <a href="#" class="text-info edit-icon" data-id="<?= $produksi['id'] ?>"><i data-feather="edit" class="icon"></i></a>
                                    <a href="<?= BASEURL; ?>/produksi/hapus/<?= $produksi['id'] ?>" class="text-danger delete-icon" onclick="return confirmDelete();"><i data-feather="trash-2" class="icon"></i></a>

                                    <script>
                                        function confirmDelete() {
                                            var confirmResult = confirm("Apakah Anda yakin ingin menghapus data ini?");
                                            return confirmResult;
                                        }
                                    </script>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // $('#tableIsi').load('<?= BASEURL; ?>/table/tableProduksi.php')
        $('.ambilData').on('click', function() {
            $('#card-kanan').removeClass('collapse');
            // $('#card-kiri').addClass('animate__backInDown');
            $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
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

        // Fungsi untuk mengisi kolom kiri dengan data
        function isiKolomKiri(data) {
            $("#bulan").val(data.bulan);
            $("#nama_customer").val(data.nama_customer);
            $("#style").val(data.style);
            $("#code").val(data.code);
            $("#size").val(data.size);
            $("#bahan").val(data.bahan);
            $("#warna").val(data.warna);
            $("#qty").val(data.qty);
            $("#harga").val(data.harga);
            $("#jahit").val(data.jahit);
            $("#motong").val(data.motong);
            $("#naskat").val(data.naskat);
            $("#status").val(data.status);
            $("#gambarLama").val(data.gambar);
            if (data.gambar) {
                // Gambar tersedia, set atribut src
                 $("#gambar").attr("src", "<?= BASEURL; ?>/img/" + data.gambar);
                } else {
                    // Tidak ada gambar baru, cek apakah gambarLama ada
                    if (data.gambarLama) {
                        $("#gambar").attr("src", "<?= BASEURL; ?>/img/" + data.gambar);
                    } else {
                        // Jika tidak ada gambar baru atau lama, tampilkan gambar default
                        $("#gambar").attr("src", "<?= BASEURL; ?>/img/nophoto.jpg");
                    }
                }

            $("#keterangan").val(data.keterangan);
            // Anda mungkin perlu mengisi elemen lain sesuai kebutuhan Anda
        }


        // Fungsi untuk mendapatkan data dari kolom kanan
        function getDataKanan(id) {
            $.ajax({
                url: "<?= BASEAPI; ?>/produksi.php?id=" + id,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    console.log("gambarLama:", data.gambar);
                    isiKolomKiri(data);
                },
                error: function() {
                    alert("Gagal mengambil data.");
                }
            });
        }

        // Tambahkan event click pada ikon "edit" di tabel
        $(".edit-icon").click(function(event) {
            event.preventDefault();
            var id = $(this).data("id");
            getDataKanan(id);
        });

        $("#ambilGambar").on("change", function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Mengatur atribut src elemen img
                    $("#gambar").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });

        
    });
</script>