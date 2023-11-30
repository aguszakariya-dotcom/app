<?php 
class Form extends Controller {
    public function index() {
        $data['title'] = 'Forms';
        $data['subTitle'] = 'Salary Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('invoice/index',$data);
        $this->view('templates/footer');
    }

    // Forms Salary
    public function salary_karyawan() {        
        $data['title'] = 'Forms';
        $data['subTitle'] = 'Salary Karyawan';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['produksi'] = $this->model('Form_model')->getLimitProduksi();
        $data['gajian'] = $this->model('Form_model')->getAllGajianToday();
        $data['totalHariIni'] = $this->model('Form_model')->getTotalGajianToday();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('form/salary_karyawan', $data);
        $this->view('templates/footer2', $data);
    }

    // Forms Salary
    public function sovana() {        
        $data['title'] = 'Forms';
        $data['subTitle'] = 'Breakdown Salary';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['produksi'] = $this->model('Form_model')->getLimitProduksi();
        $data['invSovana'] = $this->model('Invoice_model')->getInvSovana();
        $data['totalHariIni'] = $this->model('Invoice_model')->getBreakdownToday();
        $this->view('templates/header2', $data);
        $this->view('templates/sidebar', $data);
        $this->view('form/sovana', $data);
        $this->view('templates/footer2', $data);
    }

    // Form Other

    public function tambahGaji() {
        if( $this->model('Form_model')->tambahGajiKaryawan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'info');
            // Flasher::setSweetAlertNotification('Data berhasil ditambahkan.', 'success');
            header('location: ' . BASEURL . '/form/salary_karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            // Flasher::setSweetAlertNotification('Gagal menambahkan data.', 'error');
            header('location: ' . BASEURL . '/form/salary_karyawan');
            exit;
        }
    }
    public function hapusGaji($id) {
        $result = $this->model('Form_model')->hapusDtGaji($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/form/salary_karyawan');
        exit;
    }
    public function hapusBreakdown($id) {
        $result = $this->model('Form_model')->hapusBreakdownSovana($id);
        if ($result === 0) {
            Flasher::setFlash('gagal', 'dihapus: ' . $result, 'danger');
        } else {
            Flasher::setFlash('berhasil', 'dihapus', 'info');
        }
        header('location: ' . BASEURL . '/form/sovana');
        exit;
    }


}