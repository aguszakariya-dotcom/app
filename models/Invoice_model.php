<?php 

class Invoice_model {
    private $table = 'karyawan';
    private $db;

    public function __construct()
    {
        $this-> db = new Database;
    }

    public function getNomerUrut() 
    {
        $this-> db->query('SELECT * FROM ' . $this-> table . ' ORDER BY id DESC');
        return $this-> db-> resultSet();
    }
    public function getInvSovana() 
    {
        $today = date('d-M-Y');
        // Menggunakan klausa WHERE untuk membatasi hasil hanya pada tanggal hari ini
        $this->db->query('SELECT * FROM invsovana WHERE tanggal = :today ORDER BY id DESC');
        $this->db->bind(':today', $today);        
        return $this->db->resultSet();
    }
    public function getDataImperial() 
    {
        $today = date('d-M-Y');
        // Menggunakan klausa WHERE untuk membatasi hasil hanya pada tanggal hari ini
        $this->db->query('SELECT * FROM imperial WHERE tanggal = :today ORDER BY id DESC');
        $this->db->bind(':today', $today);        
        return $this->db->resultSet();
    }
    
    public function getAllGajianToday()
    {
        $today = date('d-M-Y');
        // $yesterday = date('d-M-Y', strtotime('-2 day'));
        // Menggunakan klausa WHERE untuk membatasi hasil hanya pada tanggal hari ini
        $this->db->query('SELECT * FROM gajian WHERE date = :today ORDER BY id DESC');
        $this->db->bind(':today', $today);        
        // $this->db->bind(':today', $yesterday);        
        return $this->db->resultSet();
    }

    public function getTotalGajianToday()
    {
        $today = date('d-M-Y');
        // Menggunakan klausa WHERE untuk membatasi hasil hanya pada tanggal hari ini
        $this->db->query('SELECT SUM(total) as total FROM gajian WHERE date = :today');
        $this->db->bind(':today', $today);
        $result = $this->db->single(); // Menggunakan single() karena kita hanya mengambil satu nilai total
        return $result['total'];
    }

    public function tambahInvSovana($data)
    {
        $tanggal = $data['tanggal'];
        $item = $data['style'];
        $description = implode(', ', [$data['customer'], $data['warna'], $data['size']]);
        $cost = $data['harga'];
        $qty = $data['qty'];
        $total = $data['total'];
        $query = "INSERT INTO invsovana (tanggal, item, description, cost, qty, total)
        VALUES (            
            :tanggal,
            :item,
            :description,
            :cost,
            :qty,
            :total
        )";
        $this->db->query($query);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('item', $item);
        $this->db->bind('description', $description);
        $this->db->bind('cost', $cost);
        $this->db->bind('qty', $qty);
        $this->db->bind('total', $total);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahInvImperial($data)
    {
        $tanggal = $data['tanggal'];
        $item = $data['item'];
        $descripsi = $data['descripsi'];
        $cost = $data['cost'];
        $qty = $data['qty'];
        $total = $data['total'];
        $query = "INSERT INTO imperial (tanggal, item, descripsi, cost, qty, total)
        VALUES (            
            :tanggal,
            :item,
            :descripsi,
            :cost,
            :qty,
            :total
        )";
        $this->db->query($query);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('item', $item);
        $this->db->bind('descripsi', $descripsi);
        $this->db->bind('cost', $cost);
        $this->db->bind('qty', $qty);
        $this->db->bind('total', $total);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGajian($id) {
        $query = "DELETE FROM gajian WHERE id = :id";
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

    public function getBreakdownToday()
    {
        $today = date('d-M-Y');
        // Menggunakan klausa WHERE untuk membatasi hasil hanya pada tanggal hari ini
        $this->db->query('SELECT SUM(total) as total FROM invsovana WHERE tanggal = :today');
        $this->db->bind(':today', $today);
        $result = $this->db->single(); // Menggunakan single() karena kita hanya mengambil satu nilai total
        return $result['total'];
    }

    public function inputDataGajian($data)
    {
        $tanggal = $data['tanggal'];
        $nama = $data['nama'];
        $hadir = $data['hadir'];
        $lembur = $data['lembur'];
        $salary = $data['salary'];
        $total = $data['total'];
        $query = "INSERT INTO daftar_gaji (tanggal, nama, hadir, lembur, salary, total)
        VALUES (            
            :tanggal,
            :nama,
            :hadir,
            :lembur,
            :salary,
            :total
        )";
        $this->db->query($query);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('nama', $nama);
        $this->db->bind('hadir', $hadir);
        $this->db->bind('lembur', $lembur);
        $this->db->bind('salary', $salary);
        $this->db->bind('total', $total);
        $this->db->execute();
        return $this->db->rowCount();
    }

}

