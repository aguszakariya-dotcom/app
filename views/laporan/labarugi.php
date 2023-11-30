<div class="row mt-5 mb-5 justify-content-center animate__animated fadeIndownBig">
    <div class="col-lg-6">
        <div class="card card-dark">
            <div class="card-header">
                <div class=" text-center animate__animated animate__bounceOut animate__infinite animate__slower text-bold" id=labaNya>
                <i class="fa-solid fa-comments-dollar"></i> 
                <span id="laba"></span>  <i class="fa-solid fa-comments-dollar"></i>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table-gaji">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Date</th>
                            <th>Nama Akun</th>
                            <th>Debet</th>
                            <th>Kredit</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['kasBulan'] as $allKas) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $allKas['tanggal']; ?></td>
                                <td><?= $allKas['namAkun2']; ?></td>
                                <td><?= number_format($allKas['debit2'], 0, ',', '.'); ?></td>
                                <td><?= number_format($allKas['kredit2'], 0, ',', '.'); ?></td>
                                <td><?= $allKas['keterangan']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="float-left text-bold btn btn-outline-primary" id="totalDebit">Total Debit Rp. </div>
                <div class="float-right text-bold btn btn-outline-info" id="totalKredit">Total Kredit Rp. </div>
            </div>

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Menghitung total debit
        var tDebit = $("#totalDebit");
        var ttlKredit = $("#totalKredit");
        var totalSum = 0;
        $('#table-gaji tbody tr').each(function() {
        var totalCell = $(this).find('td:eq(3)');
        var totalDebit = parseInt(totalCell.text().replace(/\D/g, ''));
        totalSum += totalDebit;
      });
      var formatJumlah = "Rp. " + totalSum.toLocaleString("id-ID");
        tDebit.text(formatJumlah);

        // Menghitung total kredit
        
        var tKredit = 0;
        $('#table-gaji tbody tr').each(function() {
            var kreditCell = $(this).find('td:eq(4)');
        var totalKredit = parseInt(kreditCell.text().replace(/\D/g, ''));
        tKredit += totalKredit;
        });
        
        var formatJumlahK = "Rp. " + tKredit.toLocaleString("id-ID");
        ttlKredit.text(formatJumlahK);

        // Menghitung laba
        var laba = totalSum - tKredit;
        $('#laba').text('Laba Rp. ' + formatCurrency(laba));

        // Menentukan warna teks berdasarkan nilai laba
        if (laba > 0) {
            $("#labaNya").addClass("text-cyan").removeClass("text-danger");
        } else if (laba < 0) {
            $("#labaNya").addClass("text-danger").removeClass("text-cyan");
        } else {
            // Nilai laba sama dengan 0, atur warna default atau sesuai keinginan Anda
            $("#labaNya").removeClass("text-cyan text-danger");
        }
        // Fungsi untuk memformat angka ke dalam format mata uang
        function formatCurrency(amount) {
            return amount.toLocaleString("id-ID");
        }
    });
</script>




