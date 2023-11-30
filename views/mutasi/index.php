<div class="row mt-2 pb-5 justify-content-center animate__animated animate__fadeInLeft">
    <div class="col-lg-10 mb5">
        <div class="card card-secondary mb-5">
            <div class="card-header list-group-item d-flex w-100 justify-content-between align-items-center">
                <div class="col-4 ">
                    <i data-feather="credit-card"></i>
                    
                    
                </div>
                <div class="col-4"></div>
                <div class="col-4 float-right">
                    
                </div>
            </div>
            <div class="card-body shadow">
                <table id="data-table" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="col-sm-2">Date</th>
                            <th class="col-sm-1">No Akun</th>
                            <th class="col-sm-3">Nama Akun</th>
                            <th class="col-sm-3">Transaksi</th>
                            <th class="col-sm-1">Debit</th>
                            <th class="col-sm-1">Kredit</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $totalDebit = 0;
                        $totalKredit = 0;
                        
                        foreach ($data['mutasi'] as $mutasi) {
                            // Menghitung total debit dan kredit pada setiap baris
                            $totalDebitBaris = floatval($mutasi['debit1']) + floatval($mutasi['debit2']) + floatval($mutasi['debit3']);
                            $totalKreditBaris = floatval($mutasi['kredit1']) + floatval($mutasi['kredit2']) + floatval($mutasi['kredit3']);
                        
                            // Menambahkan total debit dan kredit pada setiap baris ke total keseluruhan
                            $totalDebit += $totalDebitBaris;
                            $totalKredit += $totalKreditBaris;
                        ?>

                            <tr class="delete-icon">                               
                                <td><?= tgl_kita($mutasi['tanggal']); ?></td>
                                <td><?= $mutasi['noAkun1']; ?></td>
                                <td><?= $mutasi['namAkun1']; ?></td>
                                <td><?= $mutasi['keterangan']; ?></td>
                                <td><?= number_format(floatval($mutasi['debit1']), 0, ',', '.'); ?></td>
                                <td><?= number_format(floatval($mutasi['kredit1']), 0, ',', '.'); ?></td>
                                <td>
                                <a href="<?= BASEURL; ?>/mutasi/hapus/<?= $mutasi['id']; ?>" class="text-danger delete-icon"><i data-feather="trash-2" class="icon"></i></a>
                                </td>

                            <tr></tr>
                            <td></td>
                            <td><?= $mutasi['noAkun2']; ?></td>
                            <td><?= $mutasi['namAkun2']; ?></td>
                            <td></td>
                            <td><?= number_format(floatval($mutasi['debit2']), 0, ',', '.'); ?></td>
                            <td><?= number_format(floatval($mutasi['kredit2']), 0, ',', '.'); ?></td>
                            <tr id="baris3">
                            </tr>

                            <td></td>
                            <td><?= $mutasi['noAkun3']; ?></td>
                            <td></td>
                            <td></td>
                            <td>
                                <?php
                                if ($mutasi['debit3'] == '') {
                                    echo '';
                                } else {
                                    echo number_format($mutasi["debit3"], 0, ',', '.');
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($mutasi['kredit3'] == '') {
                                    echo '';
                                } else {
                                    echo number_format($mutasi["kredit3"], 0, ',', '.');
                                }
                                ?>
                            </td>

                            </tr>
                        <?php }; ?>

                    </tbody>
                </table>
                <div class="row mt-3 px-4">
                    <div class="colsm-4 animate__animated animate__bounceOut animate__infinite animate__slower">
                        <i data-feather="credit-card"></i>Total Debit Rp. <strong><?= number_format($totalDebit, 0, ',', '.'); ?></strong>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="colsm-4 float-right mr-3 animate__animated animate__zoomInRight animate__infinite animate__slower">
                    <i data-feather="credit-card"></i>Total Kredit Rp. <strong><?= number_format($totalKredit, 0, ',', '.'); ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    
<style>
    .huruf {
        font-family: "Source Sans Pro", system-ui;
        font-size: 0.9rem;
        font-weight: 400;
    }
    .delete-icon .icon {
        display: none;
    }
    .delete-icon:hover .icon {
        display: inline-block;
    }
</style>
<script>
    $(document).ready(function() {
        feather.replace();
        // $("#data-table").DataTable();
        
        $('#data-table').on('mouseenter', 'tr', function () {
            $(this).find('.icon').show();
        }).on('mouseleave', 'tr', function () {
            $(this).find('.icon').hide();
        });

        
    });
</script>