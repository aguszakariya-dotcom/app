<?php 

class Entri extends Controller {
    public function index() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Entri Jurnal';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['akhirMutasi'] = $this->model('Mutasi_model')->getAkhirMutasi();
        // $data['pilihTransaksi'] = $this->model('Entri_model')->getDistincTransaksi();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('entri/index', $data);
        $this->view('templates/footer2', $data);
    }


    public function tambahMutasi() {
        if( $this->model('Mutasi_model')->tambahDataMutasi($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/entri');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/entri');
            exit;
            
        }
    }

}

