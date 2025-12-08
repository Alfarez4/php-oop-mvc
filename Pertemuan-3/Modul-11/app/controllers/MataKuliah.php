<?php
class MataKuliah extends Controller {

    // Menampilkan daftar mata kuliah
    public function index() {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['mk'] = $this->model('MataKuliah_model')->getAllMK();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    // Menampilkan form tambah
    public function tambah() {
        $data['judul'] = 'Tambah Data Mata Kuliah';
        $data['aksi'] = 'prosesTambah';
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // Menampilkan form ubah dengan data lama
    public function ubah($id) {
        $data['judul'] = 'Ubah Data Mata Kuliah';
        $data['aksi'] = 'prosesUbah';
        $data['mk'] = $this->model('MataKuliah_model')->getMKById($id);
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    // Proses simpan data baru
    public function prosesTambah() {
        if( $this->model('MataKuliah_model')->tambahMK($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // Proses simpan perubahan
    public function prosesUbah() {
        if( $this->model('MataKuliah_model')->ubahMK($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // Hapus data
    public function hapus($id) {
        if( $this->model('MataKuliah_model')->hapusMK($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }
}