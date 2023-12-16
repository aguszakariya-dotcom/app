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
    public function GajiKaryawanHariIni() 
    {
        $hariIni = date('d-M-Y');
        $this->db->query('SELECT SUM(total) as total_gajiSkrg FROM daftar_gaji where tanggal = :hariIni');
        $this->db->bind(':hariIni', $hariIni);
        return $this->db->single();
        // return $result['total'];
    }

    public function GajiKaryawanBulanIni() 
{
     // Mendapatkan tanggal awal dan akhir bulan ini
     $tanggalAwal = date('Y-m-01');
     $tanggalAkhir = date('Y-m-t');
    $this->db->query('SELECT SUM(total) as total_BulanIni FROM daftar_gaji WHERE tanggal BETWEEN :tanggalAwal AND :tanggalAkhir');
    $this->db->bind('tanggalAwal', $tanggalAwal);
        $this->db->bind('tanggalAkhir', $tanggalAkhir);

        return $this->db->single();
}

    public function GajiKaryawanMingguIni() 
{
    $this->db->query('SELECT SUM(total) as total_mingguIni FROM daftar_gaji WHERE WEEK(tanggal) = WEEK(NOW())');
    return $this->db->single();
    // return $result['total'];
}
    
 
    

    
}