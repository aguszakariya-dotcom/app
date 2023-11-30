<?php 

class Mutasi extends Controller {

    public function index() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Mutasi Transaksi';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['mutasi'] = $this->model('Mutasi_model')->getAllMutasi();
        $data['totalDebit1'] = $this->model('Mutasi_model')->getTotalDebit1();
        $data['totalKredit2'] = $this->model('Mutasi_model')->getTotalKredit2();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('mutasi/index', $data);
        $this->view('templates/footer2', $data);
    }
        
    public function hapus($id) {
        $result = $this->model('Mutasi_model')->hapusDataMutasi($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/mutasi');
        exit;
    }

}