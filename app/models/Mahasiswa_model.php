<?php 
    class Mahasiswa_model {
        private $db;
        private $table = "Mahasiswa";

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllMahasiswa() {
            $this->db->query("SELECT * FROM {$this->table}");
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id) {
            $this->db->query('SELECT * FROM {$this->table} WHERE ID = :id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function addMahasiswa($nama, $nrp, $email, $jurusan){
            $this->db->query("INSERT INTO {$this->table} (nama, nrp , email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)");
            $this->db->bind(':nama', $nama);
            $this->db->bind(':nrp', $nrp);
            $this->db->bind(':email', $email);
            $this->db->bind(':jurusan', $jurusan);
            $this->db->execute();
        }

        public function deleteMahasiswa($id) {
            $this->db->query('DELETE FROM ${this->table} WHERE id = :id');
            $this->db->execute();
            return $this->db->rowcount();
        }

        public function updateMahasiswa($id, $nama, $nrp, $email, $jurusan){
            $this->db->query('UPDATE {$this->table} SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id');
            $this->db->bind(':nama', $nama);
            $this->db->bind(':nrp', $nrp);
            $this->db->bind(':email', $email);
            $this->db->bind(':jurusan', $jurusan);
            $this->db->bind(':id', $id);
            $this->db->execute();

            return $this->db->rowcount();
        }
        
    }
?>