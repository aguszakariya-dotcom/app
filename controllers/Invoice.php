<?php 

class Invoice extends Controller {
    public function index() {
        $data['title'] = 'Invoice';
        $data['subTitle'] = 'Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('invoice/index',$data);
        $this->view('templates/footer');
    }
    public function karyawan() {
        $data['title'] = 'Invoice';
        $data['subTitle'] = 'Salary Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['invoice'] = $this->model('Invoice_model')->getAllGajianToday();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('invoice/karyawan',$data);
        $this->view('templates/footer2');
    }
    public function other() {
        $data['title'] = 'Invoice';
        $data['subTitle'] = 'Other';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['imperial'] = $this->model('Invoice_model')->getDataImperial();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('invoice/other',$data);
        $this->view('templates/footer2');
    }
    public function sovana() {
        $data['title'] = 'Invoice';
        $data['subTitle'] = 'Sovana Bali Garmen';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['invoice'] = $this->model('Invoice_model')->getInvSovana();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('invoice/sovana',$data);
        $this->view('templates/footer2');
    }

    public function tambahDGaji() {
        if( $this->model('Invoice_model')->inputDataGajian($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'Data Berhasil ditambahkan', 'info');
            header('location: ' . BASEURL . '/invoice/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/invoice/karyawan');
            exit;            
        }
    }
    public function tambahInv() {
        if( $this->model('Invoice_model')->tambahInvSovana($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/form/sovana');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/form/sovana');
            exit;            
        }
    }
    public function tambahImperial() {
        if( $this->model('Invoice_model')->tambahInvImperial($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            header('location: ' . BASEURL . '/invoice/other');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/invoice/other');
            exit;            
        }
    }

}