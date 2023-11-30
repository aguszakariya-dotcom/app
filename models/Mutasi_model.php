<?php 


class Mutasi_model {
    private $table = 'mutasi';
    private $db;

    public function __construct()
    {
        $this-> db = new Database;
    }

    public function getAllMutasi() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC');
        return $this-> db-> resultSet();
    }

    public function getTotalKredit1() {
        $this->db->query('SELECT SUM(kredit1) AS totalKredit1 FROM mutasi');
        return $this->db->single();
    }
    public function getTotalKredit2() {
        $this->db->query('SELECT SUM(kredit2) AS totalKredit2 FROM mutasi');
        return $this->db->single();
    }
    
    public function getTotalDebit1() {
        $this->db->query('SELECT SUM(debit1) AS totalDebit1 FROM mutasi');
        return $this->db->single();
    }
    public function getTotalDebit2() {
        $this->db->query('SELECT SUM(debit2) AS totalDebit2 FROM mutasi');
        return $this->db->single();
    }
    public function getAkhirMutasi() {
        $this->db->query('SELECT * FROM mutasi ORDER BY id DESC LIMIT 1');
        return $this->db->single();
    }

    public function tambahDataMutasi($data) {
        $tanggal = $data['tanggal'];
        $namaAkun1 = ucwords($data['namaAkun1']);
        $namaAkun2 = ucwords($data['namaAkun2']);
        // $nama3 = ucwords($data['nama3']);
        $noAkun1 = $data['noAkun1'];
        $noAkun2 = $data['noAkun2'];
        $noAkun3 = $data['noAkun3'];
        $debit1 = ucwords($data['debit1']);
        $debit2 = ucwords($data['debit2']);
        $debit3 = ucwords($data['debit3']);
        $kredit1 = ucwords($data['kredit1']);
        $kredit2 = ucwords($data['kredit2']);
        $kredit3 = ucwords($data['kredit3']);
        $keterangan = ucwords($data['keterangan']);

        $query = "INSERT INTO mutasi VALUES (
                    '',
                    :tanggal,
                    :namaAkun1,
                    :namaAkun2,
                    -- :nama3,/
                    :noAkun1,
                    :noAkun2,
                    :noAkun3,
                    :debit1,
                    :debit2,
                    :debit3,
                    :kredit1,
                    :kredit2,
                    :kredit3,
                    :keterangan
                    )";  
        $this->db->query($query);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('namaAkun1', $namaAkun1);
        $this->db->bind('namaAkun2', $namaAkun2);
        // $this->db->bind('nama3', $nama3);
        $this->db->bind('noAkun1', $noAkun1);
        $this->db->bind('noAkun2', $noAkun2);
        $this->db->bind('noAkun3', $noAkun3);
        $this->db->bind('debit1', $debit1);
        $this->db->bind('debit2', $debit2);
        $this->db->bind('debit3', $debit3);
        $this->db->bind('kredit1', $kredit1);
        $this->db->bind('kredit2', $kredit2);
        $this->db->bind('kredit3', $kredit3);
        $this->db->bind('keterangan', $keterangan);
        $this->db->execute();
        return $this->db->rowCount();   
    }

    public function hapusDataMutasi($id) {
        $query = "DELETE FROM mutasi WHERE id = :id";
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