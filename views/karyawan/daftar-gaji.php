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
            <div class="card-footer">
    <div class="float-left text-bold btn btn-outline-primary animate__animated animate__bounceOut animate__infinite animate__slower">Rp. <?= number_format($data['semingguGaji']['total_gaji'], 0, ',', '.'); ?></div>
    <div class="float-right text-bold btn btn-outline-info">Rp. <?= number_format($data['totalGaji']['total_gaji'], 0, ',', '.'); ?></div>
</div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#table-gaji").DataTable();
    })
</script>