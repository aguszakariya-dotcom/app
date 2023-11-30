<?php 

class Akuntansi  extends Controller {
    
    public function index() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Bagan Akun';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['akun'] = $this->model('Akun_model')->getAllAkun();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('akuntansi/index', $data);
        $this->view('templates/footer2', $data);
    }


    public function tambahAkun() {
        if( $this->model('Akun_model')->tambahDataAkun($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/akuntansi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/akuntansi');
            exit;
            
        }
    }


    public function hapusAkun($id) {        
        $result = $this->model('Akun_model')->hapusDataAkun($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/akuntansi');
        exit;

        
    }
    
    


    // penutup controller semua dalam folder views/ akuntansi
}

