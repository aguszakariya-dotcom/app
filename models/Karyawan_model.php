<?php 
class Karyawan_model {
    private $table = 'karyawan';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllKaryawan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getAllGajiKaryawan() 
    {
        $this-> db->query('SELECT * FROM daftar_gaji ORDER BY id DESC');
        return $this-> db-> resultSet();
    }
    public function totalGajiKaryawan() 
    {
        $this->db->query('SELECT SUM(total) as total_gaji FROM daftar_gaji');
        return $this->db->single();
    }
    public function totalSemingguKaryawan() 
    {
        // Hitung tanggal 1 minggu ke belakang dari hari ini
        $tanggalAwal = date('Y-m-d', strtotime('-1 week'));
    
        // Tambahkan kriteria tanggal ke dalam query
        $this->db->query('SELECT SUM(total) as total_gaji FROM daftar_gaji WHERE tanggal >= :tanggalAwal');
        $this->db->bind('tanggalAwal', $tanggalAwal);
    
        return $this->db->single();
    }
    
    
    
}