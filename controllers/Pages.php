<?php 

class Pages extends Controller {
    public function index() {
        $data['title'] = 'Animasi | Pojok Media';
        $data['subTitle'] = 'Animasi';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pages/index', $data);
        $this->view('templates/footer2', $data);
    }
    public function fendi() {
        $data['title'] = 'Extras';
        $data['subTitle'] = 'Tahapan fendi';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pages/fendi', $data);
        $this->view('templates/footer2');
    }
    public function hafidz() {
        $data['title'] = 'Extras';
        $data['subTitle'] = 'Tahapan hafidz';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('pages/hafidz', $data);
        $this->view('templates/footer2');
    }
}