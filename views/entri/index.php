<style>
    .borCol {
        border: 2px solid #0962A0;

    }
</style>
<div class="row  mb-5 justify-content-center">
    <div class="col-lg-9 mt-1 mb-3">
        <div class="card shadow card-secondary">
            <div class="card-header">
                <a href="../public/rincian"><i data-feather="chevrons-right"></i> Menu Transaksi</a>
            </div>
            <div class="card-body">
                <form action="<?= BASEURL; ?>/entri/tambahMutasi" method="post">
                    <div class="mb-3 row">
                        <div class="col-sm-2">
                            <label>Tanggal:</label>
                            <input type="date" class="form-control datetimepicker-input input-group-append" id="tanggal" name="tanggal">
                            <script>
                                const inputDate = document.getElementById('tanggal');
                                const formattedDate = date('d-m-Y');
                                inputDate.value = formattedDate;
                            </script>
                        </div>
                        <div class="col-sm-5">
                            <label for="rincian" class="col-sm-4 form-lable">Akun Transaksi</label>
                            <select class="custom-select form-control form-select form-select-sm" aria-label="Small select example" name="pilihan" id="pilihRincian">
                                <option selected>pilih</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <label for="rincian" class="col-sm-4 form-lable">Keterangan Transaksi</label>
                            <input type="text" class="form-control fom-control-sm" aria-label="Small select example" name="keterangan" id="keterangan">
                        </div>

                    </div>
                    <div class="row mb-3 px-2 collapse" id="ke1">
                        <div class="col-sm-6">
                            <label for="namaAkun">Nama Akun</label><span id="saldo1" class="float-right cilik "></span>
                            <input type="text" class="form-control form-control-sm" name="namaAkun1" id="namaAkun1">
                        </div>
                        <div class="col-sm-2">
                            <label for="noAkun">No. Akun</label>
                            <input type="text" name="noAkun1" id="noAkun1" class="form-control form-control-sm ">
                        </div>
                        <div class="col-sm-2">
                            <label for="debit1">Debit</label>
                            <input type="text" name="debit1" id="debit1" class="form-control form-control-sm animate__animated ">
                        </div>
                        <div class="col-sm-2">
                            <label for="kredit1">Kredit</label>
                            <input type="text" name="kredit1" id="kredit1" class="form-control form-control-sm animate__animated ">
                        </div>

                    </div>
                    <!-- Baris ke2 -->
                    <div class="row mb3 px-2 collapse" id="ke2">
                        <div class="col-sm-6">
                            <label for="namaAkun">Nama Akun</label><span id="saldo2" class="float-right cilik "></span>
                            <input type="text" name="namaAkun2" id="namaAkun2" class="form-control form-control-sm">
                        </div>
                        <div class="col-sm-2">
                            <label for="noAkun">No. Akun</label>
                            <input type="text" name="noAkun2" id="noAkun2" class="form-control form-control-sm">
                        </div>
                        <div class="col-sm-2">
                            <label for="debit">Debit</label>
                            <input type="text" name="debit2" id="debit2" class="form-control form-control-sm animate__animated ">
                        </div>
                        <div class="col-sm-2">
                            <label for="kredit">Kredit</label>
                            <input type="text" name="kredit2" id="kredit2" class="form-control form-control-sm animate__animated ">
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <!-- Baris ke 3 -->
                    <div class="row mb3 px-2 collapse" id="ke3">
                        <div class="col-sm-6">
                            <label for="nama3">Nama Akun</label><span id="saldo3" class="float-right cilik "></span>
                            <input type="text" name="nama3" id="nama3" class="form-control form-control-sm">
                        </div>
                        <div class="col-sm-2">
                            <label for="noAkun3">No. Akun</label>
                            <input type="text" name="noAkun3" id="noAkun3" class="form-control form-control-sm">
                        </div>
                        <div class="col-sm-2">
                            <label for="debit3">Debit</label>
                            <input type="text" name="debit3" id="debit3" class="form-control form-control-sm animate__animated ">
                        </div>
                        <div class="col-sm-2">
                            <label for="kredit3">Kredit</label>
                            <input type="text" name="kredit3" id="kredit3" class="form-control form-control-sm animate__animated ">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class=" btn btn-primary mt-2 mr-2">save</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9 mb-5">
        <div class="card" id="table-mutasi">
            <div class="card-body shadow">
                <table class="table table-bordered table-striped" id="table-mutasi">
                    <thead>
                        <tr>
                            <th class="col-sm-2">Date</th>
                            <th class="col-sm-1">No Akun</th>
                            <th>Nama Akun</th>
                            <th>Transaksi</th>
                            <th class="col-sm-1">Debit</th>
                            <th class="col-sm-1">Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data['akhirMutasi']['tanggal']; ?></td>
                            <td><?= $data['akhirMutasi']['noAkun1']; ?></td>
                            <td><?= $data['akhirMutasi']['namAkun1']; ?></td>
                            <td><?= $data['akhirMutasi']['keterangan']; ?></td>
                            <td><?= number_format(floatval($data['akhirMutasi']['debit1']), 0, ',', '.'); ?></td>
                            <td><?= number_format(floatval($data['akhirMutasi']['kredit1']), 0, ',', '.'); ?></td>
                        <tr></tr>
                        <td><?= $data['akhirMutasi']['tanggal']; ?></td>
                        <td><?= $data['akhirMutasi']['noAkun2']; ?></td>
                        <td><?= $data['akhirMutasi']['namAkun2']; ?></td>
                        <td></td>
                        <td><?= number_format(floatval($data['akhirMutasi']['debit2']), 0, ',', '.'); ?></td>
                        <td><?= number_format(floatval($data['akhirMutasi']['kredit2']), 0, ',', '.'); ?></td>
                        <tr></tr>
                        <td><?= $data['akhirMutasi']['tanggal']; ?></td>
                        <td><?= $data['akhirMutasi']['noAkun3']; ?></td>
                        <td></td>
                        <td></td>
                        <td><?= number_format(floatval($data['akhirMutasi']['debit3']), 0, ',', '.'); ?></td>
                        <td><?= number_format(floatval($data['akhirMutasi']['kredit3']), 0, ',', '.'); ?></td>
                        </tr>
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
    .cilik {
        font-size: x-small;
        color: darkgrey;
    }

    table {
        font-family: 'Courier New', Courier, monospace;
        font-size: 0.9rem;
        font-weight: 500;
    }
</style>
<script>
    $(document).ready(function() {
        $('#rincian').change(function() {
            $('#table-mutasi').addClass('collapse');
        })

    });
</script>
<script>
    $(document).ready(function() {
        var apiData; // Membuat variabel untuk menyimpan data dari API

        $.getJSON("<?= BASEAPI; ?>/pola_transaksi.php", function(data) {
            apiData = data; // Mengambil data dari API dan menyimpannya dalam variabel apiData

            var uniqueValues = [];

            // Loop melalui data untuk mendapatkan nilai yang unik
            apiData.forEach(function(item) {
                if (uniqueValues.indexOf(item.ket1) === -1) {
                    uniqueValues.push(item.ket1);
                }
            });

            // Membuat opsi pilihan (select option) dengan nilai yang unik
            var selectOptions = "<option selected>pilih</option>";
            uniqueValues.forEach(function(value) {
                selectOptions += "<option value='" + value + "'>" + value + "</option>";
            });

            // Mengganti opsi pilihan di elemen select di halaman
            $("#pilihRincian").html(selectOptions);
        });
        // Event handler saat memilih rincian transaksi
        $("#pilihRincian").on("change", function() {
            var rinT = $(this).val();
            var nam1 = "";
            var nam2 = "";
            var nam3 = "";
            var n1 = "";
            var n2 = "";
            var n3 = "";
            var sal1 = "";
            var sal2 = "";
            var sal3 = "";

            var nAkun1 = $("#namaAkun1");
            var nAkun2 = $("#namaAkun2");
            var nAkun3 = $("#nama3");
            var nO1 = $("#noAkun1");
            var nO2 = $("#noAkun2");
            var nO3 = $("#noAkun3");
            var salN1 = $("#saldo1");
            var salN2 = $("#saldo2");
            var salN3 = $("#saldo3");

            apiData.forEach(function(item) {
                // console.log(rinT)
                if (item.ket1 === rinT) {
                    nam1 = item.namAkun1;
                    nam2 = item.namAkun2;
                    nam3 = item.namAkun3;

                    n1 = item.noAkun1;
                    n2 = item.noAkun2;
                    n3 = item.noAkun3;

                    sal1 = item.saldoNormal1;
                    sal2 = item.saldoNormal2;
                    sal3 = item.saldoNormal3;
                    // muncukan ke kolom
                    nAkun1.val(nam1);
                    nAkun2.val(nam2);
                    nAkun3.val(nam3);

                    nO1.val(n1);
                    nO2.val(n2);
                    nO3.val(n3);

                    salN1.text(sal1);
                    salN2.text(sal2);
                    salN3.text(sal3);

                    if ($("#saldo1").text().trim() === "Debit") {
                        $("#debit1").addClass("animate__rubberBand borCol shadow");
                        $("#kredit1").removeClass("animate__rubberBand borCol shadow");
                    } else {
                        $("#kredit1").addClass("animate__rubberBand borCol shadow");
                        $("#debit1").removeClass("animate__rubberBand borCol shadow");
                    }
                    if ($("#saldo2").text().trim() === "Debit") {
                        $("#debit2").addClass("animate__rubberBand borCol shadow");
                        $("#kredit2").removeClass("animate__rubberBand borCol shadow");
                    } else {
                        $("#kredit2").addClass("animate__rubberBand borCol shadow");
                        $("#debit2").removeClass("animate__rubberBand borCol shadow");
                    }
                    if ($("#saldo3").text().trim() === "Debit") {
                        $("#debit3").addClass("animate__rubberBand borCol shadow");
                        $("#kredit3").removeClass("animate__rubberBand borCol shadow");
                    } else {
                        $("#kredit3").addClass("animate__rubberBand borCol shadow");
                        $("#debit3").removeClass("animate__rubberBand borCol shadow");
                    }
                }
            })
            var isi1 = $("#noAkun1").val();
            var isi3 = $("#noAkun3").val();

            if (isi1.trim() !== "") {
                $("#ke1").removeClass("collapse")
                $("#ke2").removeClass("collapse")
            }
            if (isi3.trim() !== "") {
                $("#ke3").removeClass("collapse")
            } else {
                $("#ke3").addClass("collapse")

            }


        });



    });
</script>