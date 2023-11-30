<?php 

class Sample extends Controller {
    public function index() {
        $data['title'] = 'Tables';
        $data['subTitle'] = 'Sample';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['sample'] = $this->model('Sample_model')->getAllSample();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('sample/index', $data);
        $this->view('templates/footer2', $data);
    }
    public function tambah() {
        if( $this->model('Sample_model')->tambahSample($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/sample');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/sample');
            exit;            
        }
    }


    public function update() {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $data = [
                'id' => $id,
                'tanggal' => $_POST['tanggal'],
                'nama_customer' => $_POST['nama_customer'],
                'style' => $_POST['style'],
                'code' => $_POST['code'],
                'warna' => $_POST['warna'],
                'size' => $_POST['size'],
                'harga' => $_POST['harga'],
                'gambarSebelumnya' => $_POST['gambarSebelumnya'],
                'habis' => $_POST['habis'],
                'acc_1' => $_POST['acc_1'],
                'acc_2' => $_POST['acc_2'],
                'keterangan' => $_POST['keterangan'],
            ];

            $sample_model = $this->model('Sample_model');
            $result = $sample_model->updateSample($data);

            if ($result > 0) {
                // Update berhasil
                Flasher::setFlash('berhasil', 'diupdate', 'info');
            } else {
                // Update gagal
                Flasher::setFlash('gagal', 'diupdate', 'danger');
            }

            header('location: ' . BASEURL . '/sample');
            exit;
        } else {
            // Jika tidak ada POST data, mungkin tampilkan form update
            // Tambahkan logika atau tindakan lain yang diperlukan
            echo "Tampilkan Form Update";
        }
    }

    public function hapus($id) {
        $result = $this->model('Sample_model')->hapusDataSample($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/sample');
        exit;
    }

        // Contoh endpoint untuk mendapatkan data terbaru dari tabel
        public function getLatestData() {
            // Mendapatkan data terbaru dari model atau sumber data lainnya
            $data = $this->model('Sample_model')->getLatestData();
            
            // Mengembalikan data dalam format JSON
            echo json_encode($data);
        }

        
}