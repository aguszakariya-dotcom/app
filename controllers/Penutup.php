<?php 
class Penutup extends Controller {

    public function index() {
        $data['nama'] = $this->model('User_model')->getUser();
        $data['title'] = 'Akuntansi';
        $data['subTitle'] = 'Penutupan Akun';

        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('penutup/index', $data);
        $this->view('templates/footer2', $data);
    }
}

