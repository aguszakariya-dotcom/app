<?php 
$servername = "becik.my.id:3306";
$username = "akuntansi_ok";
$password = "123/akuntansi";
$dbname = "akuntansi";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// require 'koneksi.php';
// $koneksi = mysqli_connect("becik.my.id:3306", "akuntansi_ok", "123/akuntansi", "akuntansi");
function query($query) {
    global $koneksi; // Tambahkan baris ini untuk mengakses variabel $koneksi yang ada di luar fungsi
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function updateSample($data){
    global $koneksi;
    $id = $data["id"];
    $tanggal = $data["tanggal"];
    $nama_customer = htmlspecialchars(ucwords($data["nama_customer"]));
    $style = htmlspecialchars(ucwords($data["style"]));
    $code = htmlspecialchars(strtoupper($data["code"]));
    $warna = htmlspecialchars(ucwords($data["warna"]));
    $size = htmlspecialchars(strtoupper($data["size"]));
    $harga = $data["harga"];
    $gambarSebelumnya = $data["gambarSebelumnya"];
    $habis = htmlspecialchars($data["habis"]);
    $acc_1 = htmlspecialchars(ucwords($data["acc_1"]));
    $acc_2 = htmlspecialchars(ucwords($data["acc_2"]));
    $keterangan = htmlspecialchars($data["keterangan"]);
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarSebelumnya;
    }else{
        $gambar = upload();
    };
    $query = "UPDATE sample SET
                tanggal = '$tanggal',
                nama_customer = '$nama_customer',
                style = '$style',
                code = '$code',
                warna = '$warna',
                size = '$size',
                harga = '$harga',
                gambar = '$gambar',
                habis = '$habis',
                acc_1 = '$acc_1',
                acc_2 = '$acc_2',
                keterangan = '$keterangan'
                WHERE id = $id  ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    // $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    
    if ($ukuranFile > 6000000) {
        echo "<script>
                alert('Maaf, ukuran gambar terlalu besar!');
            </script>
            ";
        return false;
    }
    
    move_uploaded_file($tmpName, 'localhost/img-produksi/' . $namaFile);
    return $namaFile;
}