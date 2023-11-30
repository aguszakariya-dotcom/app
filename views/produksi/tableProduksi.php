<thead>
    <tr class="text-bold">
        <th><i class="fa-solid fa-user-pen tambah text-primary" id="tambah"></i></th>
        <th class="col-sm-2">Date</th>
        <th class="col-sm-2">Customer</th>
        <th>Code</th>
        <th class="col-sm-2">Style</th>
        <th>Warna</th>
        <th>QTY</th>
        <th>Image</th>
        <th>Status</th>
        <th>action</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1; ?>
    <?php foreach ($data['produksi'] as $produksi) : ?>
        <tr id="tableProduksi">
            <th class=""><?= $no++ ?></th>
            <td><?= tgl_kita($produksi['bulan']); ?></td>
            <td class="text-capitalize"><?= $produksi['nama_customer']; ?></td>
            <td><?= $produksi['code']; ?></td>
            <!-- <td ><?= $produksi['code']; ?></td> -->
            <td class="text-capitalize"><?= $produksi['style']; ?></td>
            <td class="text-capitalize"><?= $produksi['warna']; ?></td>
            <td><?= $produksi['qty']; ?></td>
            <td class="">
                <img src="http://localhost/img-produksi/<?= $produksi['gambar']; ?>" alt="" height="30" width="22" class=" zoom">
            </td>
            <td>
                <?php
                if ($produksi['status'] == 'Menunggu') {
                    echo '<i data-feather="clock"></i>';
                } else if ($produksi['status'] == 'Proses') {
                    echo '<img src="images/proses.gif" width="40">';
                } else if ($produksi['status'] == 'Finish') {
                    echo '<img src="images/done.png" width="40">';
                } else if ($produksi['status'] == '') {
                    echo '<span data-feather="badge badge-danger">Finish</span>';
                }
                ?>
            </td>
            <td>
                <div class="d-flex">
                    <!-- Tambahkan link untuk ikon "trash-2" -->
                    <a href="#" class="text-primary editProduksi icon" data-id="<?= $produksi['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a> &nbsp;
                    <a href="<?= BASEURL; ?>/produksi/hapus/<?= $produksi['id']; ?>" class="text-danger delete-icon icon" onclick="return confirm('Yakin Mau menghapus data ini ??');"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
<script>
    $(document).ready(function() {

        $('#tambah').click(function() {
            // alert ('ok')
            $('#update').addClass('collapse');
            $('#card-kiri').removeClass('collapse');
            $('#card-kiri').addClass('animate__bounce');
            $('body').addClass('sidebar-mini layout-fixed sidebar-closed sidebar-collapse');
        });
    });
</script>