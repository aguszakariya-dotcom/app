<div class="row py-5 my-2 justify-content-center">
    <div class="col-lg-9">
        <div class="card shadow">
            <div class="card-header">List Data karyawan</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach ($data['karyawan'] as $karya) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>