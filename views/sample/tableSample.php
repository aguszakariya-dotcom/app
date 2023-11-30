
    <thead>
    <tr class="text-bold">
        <th><i class="fa-solid fa-user-pen tambah text-primary"></i></th>
        <th class="col-sm-2">Date</th>
            <th class="col-sm-2">Customer</th>
            <th>Code</th>
            <th class="col-sm-2">Style</th>
            <th>Warna</th>
            <th>Image</th>
            <th>Status</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody id="tableNya">
    <?php
        $no = 1;
        foreach ($data['sample'] as $sample) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td ><?= tgl_kita($sample['tanggal']) ?></td>
                <td><?= $sample['nama_customer'] ?></td>
                <td><?= $sample['code'] ?></td>
                <td ><?= $sample['style'] ?></td>
                <td><?= $sample['warna'] ?></td>
                <td><img src="../../../../img-produksi/<?= $sample['gambar'] ?>" class="zoom" width="28px" height="32px"></td>
                <td class="text-large"><?php
                    if ($sample['harga'] == '0') {
                        echo '<img src="images/proses.gif" width="30">';
                    } else {
                        echo '<button type="button" class="btn btn-sm btn-outline-none"  data-toggle="tooltip" data-placement="top" title="Sudah dibayar"><img src="images/coffee.png" width="24"></button>';
                    }
                    ?>
                </td>
                <td class="px-2">
                    <div class="d-flex">
                        <div class="d-flex">
                            <a href="#" class="text-primary editSample icon" data-id="<?= $sample['id']; ?>"><i class="fa-solid fa-file-pen icon"></i></a> &nbsp;
                            <a href="<?= BASEURL; ?>/sample/hapus/<?= $sample['id']; ?>" class="text-danger float-end delete-icon icon" onclick="return confirm('Yakin Mau menghapus data ini ??');"><i class="fa-solid fa-trash-can icon"></i></a>

                        </div>
                        
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
