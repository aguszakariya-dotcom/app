<?php 

class Akun_model {
    private $table = 'akun';
    private $db;

    public function __construct()
    {
        $this-> db = new Database;
    }

    public function tambahDataAkun($data) {
        $noAkun = strtoupper($data['noAkun']);
        $namaAkun = ucwords($data['namaAkun']);
        $klasifikasi = $data['klasifikasi'];
        $saldoNormal = $data['saldoNormal'];
    
        $query = "INSERT INTO akun 
                    VALUES
                    ('', 
                        :noAkun, 
                        :namaAkun, 
                        :klasifikasi, 
                        :saldoNormal
                    )";
    
        $this->db->query($query);
        $this->db->bind('noAkun', $noAkun);
        $this->db->bind('namaAkun', $namaAkun);
        $this->db->bind('klasifikasi', $klasifikasi);
        $this->db->bind('saldoNormal', $saldoNormal);
    
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getAllAkun() {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC');
        return $this-> db-> resultSet();
    }

    public function hapusDataAkun($id) {
        $query = "DELETE FROM akun WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        // $this->db->execute();
        try {
            $this->db->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Tampilkan pesan error lengkap
            die(); // Hentikan eksekusi skrip
        }

        return $this->db->rowCount();
    }       

    
}