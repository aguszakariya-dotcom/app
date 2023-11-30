<?php 
class Karyawan extends Controller {
    
    public function index() {
        $data['title'] = 'Karyawan';
        $data['subTitle'] = ' | Data karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawan();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer2', $data);
    }
    public function daftar_gaji() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = ' List Gaji Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['listGaji'] = $this->model('Karyawan_model')->getAllGajiKaryawan();
        $data['totalGaji'] = $this->model('Karyawan_model')->totalGajiKaryawan();
        $data['semingguGaji'] = $this->model('Karyawan_model')->totalSemingguKaryawan();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('karyawan/daftar-gaji', $data);
        $this->view('templates/footer2', $data);
    }
}