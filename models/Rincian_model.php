<?php 

class Rincian_model {
    private $table = 'pola_transaksi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function tambahPolaTransaksi($data)
    {
        $namAkun1 = ucwords($data['namAkun1']);
        $namAkun2 = ucwords($data['namAkun2']);
        $namAkun3 = ucwords($data['namAkun3']);
        $noAkun1 = $data['noAkun1'];
        $noAkun2 = $data['noAkun2'];
        $noAkun3 = $data['noAkun3'];
        $ket1 = ucwords($data['ket1']);
        $ket3 = ucwords($data['ket3']);
        $saldoNormal1 = ucwords($data['saldoNormal1']);
        $saldoNormal2 = ucwords($data['saldoNormal2']);
        $saldoNormal3 = ucwords($data['saldoNormal3']);
        $query = "INSERT INTO pola_transaksi 
                    VALUES
                    ('', 
                        :namAkun1, 
                        :namAkun2, 
                        :namAkun3, 
                        :noAkun1, 
                        :noAkun2, 
                        :noAkun3, 
                        :ket1, 
                        :ket3, 
                        :saldoNormal1,
                        :saldoNormal2,
                        :saldoNormal3
                        )";
        $this->db->query($query);
        $this->db->bind('namAkun1', $namAkun1);
        $this->db->bind('namAkun2', $namAkun2);
        $this->db->bind('namAkun3', $namAkun3);
        $this->db->bind('noAkun1', $noAkun1);
        $this->db->bind('noAkun2', $noAkun2);
        $this->db->bind('noAkun3', $noAkun3);
        $this->db->bind('ket1', $ket1);
        $this->db->bind('ket3', $ket3);
        $this->db->bind('saldoNormal1', $saldoNormal1);
        $this->db->bind('saldoNormal2', $saldoNormal2);
        $this->db->bind('saldoNormal3', $saldoNormal3);

        $this->db->execute();
        return $this->db->rowCount();
    }
   
    public function inputPolaTransaksi() {
        $this->db->query('SELECT * FROM pola_transaksi ORDER ket1');
        return $this->db->resultSet();
    }
    public function getAllPolaTransaksi() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
        return $this->db->resultSet();
    }
    
    public function hapusPolaTransaksi($id) {
        $query = "DELETE FROM pola_transaksi WHERE id = :id";
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
