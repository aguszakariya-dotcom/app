<?php 

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] =[
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function setErrorFlash($pesan, $aksi, $tipe) {
        $_SESSION['error_flash'] =[
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            // Menampilkan notifikasi SweetAlert2
            print_r('<script>');
            print_r('Swal.fire({');
            print_r('icon: "success",'); // Menggunakan ikon success
            print_r('title: "' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '",');
            print_r('position: "top-end",'); // Posisi atas kanan
            print_r('toast: true,'); // Aktifkan mode toast
            print_r('timer: 2000,'); // Waktu tampil 2000ms
            print_r('timerProgressBar: true,'); // Tampilkan progress bar waktu
            print_r('height: 150,'); // Tinggi 150px
            print_r('customClass: {');
            print_r('    title: "text-white",'); // Mengatur warna teks menjadi putih
            print_r('    popup: "bg-primary"'); // Mengatur latar belakang menjadi biru (gunakan kelas warna Bootstrap atau sesuaikan dengan kelas CSS Anda sendiri)
            print_r('}');
            print_r('});');
            print_r('</script>');
        } elseif (isset($_SESSION['error_flash'])) {
            // Menampilkan notifikasi SweetAlert2 untuk error
            print_r('<script>');
            print_r('Swal.fire({');
            print_r('icon: "' . $_SESSION['error_flash']['tipe'] . '",');
            print_r('title: "Error: ' . $_SESSION['error_flash']['pesan'] . ' ' . $_SESSION['error_flash']['aksi'] . '",');
            print_r('position: "top-end",'); // Posisi atas kanan
            print_r('toast: true,'); // Aktifkan mode toast
            print_r('timer: 2000,'); // Waktu tampil 2000ms
            print_r('timerProgressBar: true,'); // Tampilkan progress bar waktu
            print_r('height: 150,'); // Tinggi 150px
            print_r('customClass: {');
            print_r('    title: "text-white",'); // Mengatur warna teks menjadi putih
            print_r('    popup: "bg-danger"'); // Mengatur latar belakang menjadi merah (gunakan kelas warna Bootstrap atau sesuaikan dengan kelas CSS Anda sendiri)
            print_r('}');
            print_r('});');
            print_r('</script>');
        }
    
        // Tambahkan notifikasi SweetAlert2 jika ada
        if (isset($_SESSION['swal_notification'])) {
            print_r('<script>');
            print_r('Swal.fire({');
            print_r('icon: "' . $_SESSION['swal_notification']['type'] . '",');
            print_r('title: "' . $_SESSION['swal_notification']['message'] . '",');
            print_r('position: "top-end",'); // Posisi atas kanan
            print_r('toast: true,'); // Aktifkan mode toast
            print_r('timer: 2000,'); // Waktu tampil 2000ms
            print_r('timerProgressBar: true,'); // Tampilkan progress bar waktu
            print_r('height: 150,'); // Tinggi 150px
            print_r('customClass: {');
            print_r('    title: "text-white",'); // Mengatur warna teks menjadi putih
            print_r('    popup: "bg-info"'); // Mengatur latar belakang menjadi biru muda (gunakan kelas warna Bootstrap atau sesuaikan dengan kelas CSS Anda sendiri)
            print_r('}');
            print_r('});');
            print_r('</script>');
            unset($_SESSION['swal_notification']);
        }
    
        unset($_SESSION['flash']);
        unset($_SESSION['error_flash']);
    }
    
    
    
    

}