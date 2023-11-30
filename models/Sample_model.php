<?php 


class Sample_model {
    private $table = 'sample';
    private $db;
    public function __construct()
    {
        $this-> db = new Database;
    }

    public function getAllSample() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC');
        return $this-> db-> resultSet();
    }

    public function tambahSample($data) {
        // Ambil semua data dari $data
        $tanggal = $data['tanggal'];
        $nama_customer = $data['nama_customer'];
        $style = $data['style'];
        $code = $data['code'];
        $warna = $data['warna'];
        $size = $data['size'];
        $harga = $data['harga'];
        $habis = $data['habis'];
        $acc_1 = $data['acc_1'];
        $acc_2 = $data['acc_2'];
        $keterangan = $data['keterangan'];
        
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
            $query = "INSERT INTO sample (tanggal, nama_customer, style, code,  warna, size, harga, gambar, habis, acc_1, acc_2, keterangan)
            VALUES (
                :tanggal, 
                :nama_customer, 
                :style, 
                :code, 
                :warna, 
                :size, 
                :harga, 
                :gambar,
                :habis, 
                :acc_1, 
                :acc_2, 
                :keterangan
            )";
            
            $this->db->query($query);
            $this->db->bind('tanggal', $tanggal);
            $this->db->bind('nama_customer', $nama_customer);
            $this->db->bind('style', $style);
            $this->db->bind('code', $code);
            $this->db->bind('warna', $warna);
            $this->db->bind('size', $size);
            $this->db->bind('harga', $harga);
            $this->db->bind('gambar', $gambar);
            $this->db->bind('habis', $habis);
            $this->db->bind('acc_1', $acc_1);
            $this->db->bind('acc_2', $acc_2);
            $this->db->bind('keterangan', $keterangan);
            
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

        public function updateSample($data) {
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
            
            if ($_FILES['gambar']['error'] === 4) {
                $gambar = $gambarSebelumnya;
            } else {
                $gambar = $this->upload();
            }
    
            $query = "UPDATE sample SET
                        tanggal = :tanggal,
                        nama_customer = :nama_customer,
                        style = :style,
                        code = :code,
                        warna = :warna,
                        size = :size,
                        harga = :harga,
                        gambar = :gambar,
                        habis = :habis,
                        acc_1 = :acc_1,
                        acc_2 = :acc_2,
                        keterangan = :keterangan
                        WHERE id = :id";
            
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->bind('tanggal', $tanggal);
            $this->db->bind('nama_customer', $nama_customer);
            $this->db->bind('style', $style);
            $this->db->bind('code', $code);
            $this->db->bind('warna', $warna);
            $this->db->bind('size', $size);
            $this->db->bind('harga', $harga);
            $this->db->bind('gambar', $gambar);
            $this->db->bind('habis', $habis);
            $this->db->bind('acc_1', $acc_1);
            $this->db->bind('acc_2', $acc_2);
            $this->db->bind('keterangan', $keterangan);
            
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function hapusDataSample($id) {
            $query = "DELETE FROM sample WHERE id = :id";
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