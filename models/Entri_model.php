<?php 

class Entri_model {
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this-> db = new Database;
    }

    public function getAllEntri() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table);
        return $this-> db-> resultSet();
    }

    public function getAllRincianTransaksi() 
    {
        $this->db->query('SELECT * FROM rincianTransaksi');
        return $this->db->resultSet();
    }
    public function getDistinctRincian()
    {
        $this->db->query('SELECT DISTINCT rincian FROM rincianTransaksi');
        return $this->db->resultSet();
    }

    public function tambahDataMutasi() {
        
    }

}