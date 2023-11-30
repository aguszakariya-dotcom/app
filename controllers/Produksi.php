<?php 

class Produksi extends Controller {
    public function index() {
        $data['title'] = 'Tables';
        $data['subTitle'] = 'Produksi';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['produksi'] = $this->model('Produksi_model')->getAllProduksi();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('produksi/index', $data);
        $this->view('templates/footer2', $data);
    }
    public function pg() {
        $data['title'] = 'Tables';
        $data['subTitle'] = 'Produksi'; 
        $data['nama'] = $this->model('User_model')->getUser();
        // $data['produksi'] = $this->model('Produksi_model')->getAllProduksi();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('produksi/pg', $data);
        $this->view('templates/footer2', $data);
    }

    public function tambah() {
        if( $this->model('Produksi_model')->newProduksi($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/produksi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/produksi');
            exit;            
        }
    }

    public function hapus($id) {
        $result = $this->model('Produksi_model')->hapusDataProduksi($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/produksi');
        exit;
    }

    public function update() {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $data = [
                'id' => $id,
                'bulan' => $_POST['bulan'],
                'nama_customer' => $_POST['nama_customer'],
                'code' => $_POST['code'],
                'style' => $_POST['style'],
                'bahan' => $_POST['bahan'],
                'warna' => $_POST['warna'],
                'size' => $_POST['size'],
                'qty' => $_POST['qty'],
                'gambarSebelumnya' => $_POST['gambarSebelumnya'],
                'harga' => $_POST['harga'],
                'keterangan' => $_POST['keterangan'],
                'jahit' => $_POST['jahit'],
                'motong' => $_POST['motong'],
                'naskat' => $_POST['naskat'],
                'status' => $_POST['status']
            ];
    
            $produksi_model = $this->model('Produksi_model');
            $result = $produksi_model->updateProduksi($data);

            if ($result > 0) {
                // Update berhasil
                Flasher::setFlash('berhasil', 'diupdate', 'info');
            } else {
                // Update gagal
                Flasher::setFlash('gagal', 'diupdate', 'danger');
            }

            header('location: ' . BASEURL . '/produksi');
            exit;
        } else {
            // Jika tidak ada POST data, mungkin tampilkan form update
            // Tambahkan logika atau tindakan lain yang diperlukan
            echo "Tampilkan Form Update";
        }
    }
    
}