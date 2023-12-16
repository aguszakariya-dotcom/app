
<!-- <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
 ?> -->
<div class="row mt-5 mb-5 justify-content-center animate__animated fadeIndownBig">
    <div class="col-lg-7">
        <div class="card card-secondary">
            <div class="card-header">
                <div class="card-title">list gaji karyawan</div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table-gaji">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Date</th>
                            <th>Nama</th>
                            <th>Salary Pokok</th>
                            <th>Hadir</th>
                            <th>Lembur</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;    
                        foreach($data['listGaji'] as $allGaji) :  
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $allGaji['tanggal']; ?></td>
                            <td><?= $allGaji['nama']; ?></td>
                            <td><?= $allGaji['salary']; ?></td>
                            <td>Rp. <?= number_format($allGaji['hadir'], 0, ',', '.'); ?></td>
                            <td>Rp. <?= number_format($allGaji['lembur'], 0, ',', '.'); ?></td>
                            <td>Rp. <?= number_format($allGaji['total'], 0, ',', '.'); ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer row d-flex">
    <div class="col-3 text-bold btn btn-outline-primary animate__animated animate__bounceOut animate__infinite animate__slower">Rp. <?= number_format($data['gajiHariIni']['total_gajiSkrg'], 0, ',', '.'); ?></div>
    <div class="col"></div>
    <div class="col-3 text-bold btn btn-outline-info">Rp. <?= number_format($data['semingguGaji']['total_mingguIni'], 0, ',', '.'); ?></div>
    <div class="col"></div>
    <div class="col-3text-bold btn btn-outline-info">Rp. <?= number_format($data['sebulanGaji']['total_BulanIni'], 0, ',', '.'); ?></div>
</div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#table-gaji").DataTable();
    })
</script>