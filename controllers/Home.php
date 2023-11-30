<?php 

class Home extends Controller {
    
    public function index() {
        $data['title'] = 'Dasboard';
        $data['subTitle'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['produksi'] = $this->model('Produksi_model')->getLimitProduksi();
        $data['jumKasSkrg'] = $this->model('Laporan_model')->totalKasBulanIni();
        $data['jumKreditSkrg'] = $this->model('Laporan_model')->totalKreditBulanIni();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
