<?php 
class Rincian extends Controller {
    public function index() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'List Rincian Transaksi';
        $data['nama'] = $this->model('User_model')->getUser();
        // Memanggil metode getAllRincianTransaksi() langsung dari model tanpa membuat objek baru
        $data['rincian'] = $this->model('Rincian_model')->getAllPolaTransaksi();

        // Memuat tampilan dengan data yang diperlukan
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('rincian/index', $data);
        $this->view('templates/footer2', $data);
    }

    public function tambahRincian()
    {
        if( $this->model('Rincian_model')->tambahPolaTransaksi($_POST) > 0 ) {
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/rincian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/rincian');
            exit;
            
        }
        
    }

    public function hapusPola($id) {        
        $result = $this->model('Rincian_model')->hapusPolaTransaksi($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'Data Berhasil dihapus', 'btn-outline-info');
        }
        header('location: ' . BASEURL . '/rincian');
        exit;

        
    }

}
