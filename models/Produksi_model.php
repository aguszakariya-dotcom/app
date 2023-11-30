<?php 

class Produksi_model {
    private $table = 'produksi';
    private $db;
    public function __construct()
    {
        $this-> db = new Database;
    }

    public function getAllProduksi() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC');
        return $this-> db-> resultSet();
    }
    public function getLimitProduksi() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC LIMIT 7');
        return $this-> db-> resultSet();
    }
    public function newProduksi($data) {
        // Ambil semua data dari $data
        $bulan = $data['bulan'];
        $nama_customer = $data['nama_customer'];
        $code = $data['code'];
        $style = $data['style'];
        $bahan = $data['bahan'];
        $warna = $data['warna'];
        $size = $data['size'];
        $qty = $data['qty'];
        $harga = $data['harga'];
        $keterangan = $data['keterangan'];
        $jahit = $data['jahit'];
        $motong = $data['motong'];
        $naskat = $data['naskat'];
        $status = $data['status'];
        
// Menyiapkan gambar
$gambar = ''; // Gambar default jika tidak ada gambar baru
if (!empty($_FILES['gambar']['name'])) {
    // Mengunggah gambar baru
    $uploadDir = 'localhost/img-produksi/';
    $gambar = $uploadDir . basename($_FILES['gambar']['name']);
    
    // Move the uploaded file to the correct directory
    move_uploaded_file($_FILES['gambar']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img-produksi/' . basename($_FILES['gambar']['name']));

    // Modify the $gambar variable to store only the filename
    $gambar = basename($_FILES['gambar']['name']);
} elseif (!empty($_POST['gambarSebelumnya'])) {
    // Menggunakan gambar yang sudah ada jika tidak ada gambar baru
    $gambar = $_POST['gambarSebelumnya'];
}
    
        // Menyimpan data ke database
        $query = "INSERT INTO produksi (bulan, nama_customer, code, style, bahan, warna, size, qty, gambar, harga, keterangan, jahit, motong, naskat, status)
        VALUES (
            :bulan, 
            :nama_customer, 
            :code, 
            :style, 
            :bahan, 
            :warna, 
            :size, 
            :qty, 
            :gambar,
            :harga, 
            :keterangan, 
            :jahit, 
            :motong, 
            :naskat, 
            :status
        )";
        
        $this->db->query($query);
        $this->db->bind('bulan', $bulan);
        $this->db->bind('nama_customer', $nama_customer);
        $this->db->bind('style', $style);
        $this->db->bind('code', $code);
        $this->db->bind('bahan', $bahan);
        $this->db->bind('warna', $warna);
        $this->db->bind('size', $size);
        $this->db->bind('qty', $qty);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('harga', $harga);
        $this->db->bind('keterangan', $keterangan);
        $this->db->bind('jahit', $jahit);
        $this->db->bind('motong', $motong);
        $this->db->bind('naskat', $naskat);
        $this->db->bind('status', $status);
        
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function upload() {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        
        // Setel lokasi direktori untuk menyimpan file yang diupload
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/img-produksi/';
        $gambar = $uploadDir . $namaFile;
        
        // Periksa ukuran file
        if ($ukuranFile > 6000000) {
            echo "<script>alert('Maaf, ukuran gambar terlalu besar!');</script>";
            return false;
        }

        // Pindahkan file yang diupload ke direktori yang ditentukan
        move_uploaded_file($tmpName, $gambar);
        
        return $namaFile;
    }
    
    public function updateProduksi($data) {
        $id = $data["id"];
        $bulan = $data['bulan'];
        $nama_customer = htmlspecialchars(ucwords($data["nama_customer"]));
        $code = htmlspecialchars(strtoupper($data["code"]));
            $style = htmlspecialchars(ucwords($data["style"]));
            $bahan = htmlspecialchars(strtoupper($data["bahan"]));
            $warna = htmlspecialchars(ucwords($data["warna"]));
            $size = htmlspecialchars(strtoupper($data["size"]));
        $qty = $data['qty'];
        $gambarSebelumnya = $data["gambarSebelumnya"];
        $harga = $data['harga'];
        $keterangan = htmlspecialchars($data["keterangan"]);
        $jahit = $data['jahit'];
        $motong = $data['motong'];
        $naskat = $data['naskat'];
        $status = $data['status'];
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarSebelumnya;
        } else {
            $gambar = $this->upload();
        }
        $query = "UPDATE produksi SET
            bulan = :bulan,
            nama_customer = :nama_customer,
            code = :code,
            style = :style,
            bahan = :bahan,
            warna = :warna,
            size = :size,
            qty = :qty,
            gambar = :gambar,
            harga = :harga,
            keterangan = :keterangan,
            jahit = :jahit,
            motong = :motong,
            naskat = :naskat,
            status = :status
            WHERE id = :id";
    
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('bulan', $bulan);
        $this->db->bind('nama_customer', $nama_customer);
        $this->db->bind('code', $code);
        $this->db->bind('style', $style);
        $this->db->bind('bahan', $bahan);
        $this->db->bind('warna', $warna);
        $this->db->bind('size', $size);
        $this->db->bind('qty', $qty);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('harga', $harga);
        $this->db->bind('keterangan', $keterangan);
        $this->db->bind('jahit', $jahit);
        $this->db->bind('motong', $motong);
        $this->db->bind('naskat', $naskat);
        $this->db->bind('status', $status);
    
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    

    public function hapusDataProduksi($id) {
        $query = "DELETE FROM produksi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        try {
            $this->db->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Tampilkan pesan error lengkap
            die(); // Hentikan eksekusi skrip
        }

        return $this->db->rowCount();
    }



}