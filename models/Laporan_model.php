<?php

class Laporan_model
{
    private $table = 'mutasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKas()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE namAkun2 = :namaAkun ORDER BY id DESC');
        $this->db->bind('namaAkun', 'Kas (cash)');
        return $this->db->resultSet();
    }
    public function kasBulanIni()
    {
        // Mendapatkan tanggal awal dan akhir bulan ini
        $tanggalAwal = date('Y-m-01');
        $tanggalAkhir = date('Y-m-t');

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE namAkun2 = :namAkun2 AND tanggal BETWEEN :tanggalAwal AND :tanggalAkhir ORDER BY id DESC');

        $this->db->bind('namAkun2', 'Kas (cash)'); // Perbaikan disini
        $this->db->bind('tanggalAwal', $tanggalAwal);
        $this->db->bind('tanggalAkhir', $tanggalAkhir);

        return $this->db->resultSet();
    }
    public function totalKasBulanIni()
    {
        // Mendapatkan tahun dan bulan saat ini
        $tahunIni = date('Y');
        $bulanIni = date('m');

        // Mendapatkan tanggal awal dan akhir bulan ini
        $tanggalAwal = date('Y-m-01');
        $tanggalAkhir = date('Y-m-t');

        $this->db->query('SELECT SUM(debit2) as total_kas FROM ' . $this->table . ' WHERE namAkun2 = :namAkun2 AND YEAR(tanggal) = :tahun AND MONTH(tanggal) = :bulan AND tanggal BETWEEN :tanggalAwal AND :tanggalAkhir ORDER BY id DESC');

        $this->db->bind('namAkun2', 'Kas (cash)');
        $this->db->bind('tahun', $tahunIni);
        $this->db->bind('bulan', $bulanIni);
        $this->db->bind('tanggalAwal', $tanggalAwal);
        $this->db->bind('tanggalAkhir', $tanggalAkhir);

        // Menggunakan single() karena kita hanya ingin satu nilai, yaitu total jumlah kas
        return $this->db->single();
    }
    public function totalKreditBulanIni()
    {
        // Mendapatkan tahun dan bulan saat ini
        $tahunIni = date('Y');
        $bulanIni = date('m');

        // Mendapatkan tanggal awal dan akhir bulan ini
        $tanggalAwal = date('Y-m-01');
        $tanggalAkhir = date('Y-m-t');

        $this->db->query('SELECT SUM(kredit2) as total_kredit FROM ' . $this->table . ' WHERE namAkun2 = :namAkun2 AND YEAR(tanggal) = :tahun AND MONTH(tanggal) = :bulan AND tanggal BETWEEN :tanggalAwal AND :tanggalAkhir ORDER BY id DESC');

        $this->db->bind('namAkun2', 'Kas (cash)');
        $this->db->bind('tahun', $tahunIni);
        $this->db->bind('bulan', $bulanIni);
        $this->db->bind('tanggalAwal', $tanggalAwal);
        $this->db->bind('tanggalAkhir', $tanggalAkhir);

        // Menggunakan single() karena kita hanya ingin satu nilai, yaitu total jumlah kas
        return $this->db->single();
    }

}
