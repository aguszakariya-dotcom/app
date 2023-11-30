<?php 
class Laporan extends Controller {
    

    public function index() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Laporan Laba-Rugi';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['listKas'] = $this->model('Laporan_model')->getAllKas();
        $data['kasBulan'] = $this->model('Laporan_model')->kasBulanIni();
        // $data['semingguGaji'] = $this->model('Laporan_model')->totalSemingguKaryawan();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laporan/labarugi', $data);
        $this->view('templates/footer2', $data);
    }
    public function laba() {
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Laporan Laba-Rugi';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['listKas'] = $this->model('Laporan_model')->getAllKas();
        $data['kasBulan'] = $this->model('Laporan_model')->kasBulanIni();
        // $data['semingguGaji'] = $this->model('Laporan_model')->totalSemingguKaryawan();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('laporan/labarugi', $data);
        $this->view('templates/footer2', $data);
    }
}