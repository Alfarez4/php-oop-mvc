<?php
class MataKuliah_model {
    private $table = 'matakuliah';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Ambil semua data mata kuliah
    public function getAllMK() {
        $this->db->query("SELECT * FROM " . $this->table . " ORDER BY id DESC");
        return $this->db->resultSet();
    }

    // Ambil data mata kuliah berdasarkan ID
    public function getMKById($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Tambah data mata kuliah baru
    public function tambahMK($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (kode_mk, nama_mk, semester, sks, status_id) 
                  VALUES (:kode, :nama, :semester, :sks, :status)";
        $this->db->query($query);
        $this->db->bind('kode', $data['kode_mk']);
        $this->db->bind('nama', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('status', isset($data['status_id']) ? $data['status_id'] : 1);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Ubah data mata kuliah
    public function ubahMK($data) {
        $query = "UPDATE " . $this->table . " 
                  SET kode_mk = :kode, nama_mk = :nama, semester = :semester, sks = :sks, status_id = :status 
                  WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode', $data['kode_mk']);
        $this->db->bind('nama', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('status', isset($data['status_id']) ? $data['status_id'] : 1);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Hapus data mata kuliah
    public function hapusMK($id) {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}