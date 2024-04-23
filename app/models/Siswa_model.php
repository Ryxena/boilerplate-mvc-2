<?php 
    class Siswa_model {
        private $db;
        private $table = "tbl_siswa";

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllMahasiswa() {
            $this->db->query("SELECT * FROM {$this->table}");
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id) {
            $this->db->query("SELECT * FROM {$this->table} WHERE id_siswa = :id");
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function addMahasiswa($data){
            $this->db->query("INSERT INTO {$this->table} (id_siswa, tanggal_daftar , kelas, nama_lengkap, jenis_kelamin, alamat, email, whatsapp) VALUES (:id_siswa, :tanggal_daftar , :kelas, :nama_lengkap, :jenis_kelamin, :alamat, :email, :whatsapp)");
            $this->db->bind(':id_siswa', $data['id_siswa']);
            $this->db->bind(':tanggal_daftar', $data['tanggal_daftar']);
            $this->db->bind(':kelas', $data['kelas']);
            $this->db->bind(':nama_lengkap', $data['nama_lengkap']);
            $this->db->bind(':jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind(':alamat', $data['alamat']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':whatsapp', $data['whatsapp']);
            $this->db->execute();
            return $this->db->rowcount();
        }
        
        public function deleteMahasiswa($id) {
            $this->db->query("DELETE FROM {$this->table} WHERE id_siswa = :id");
            $this->db->bind(':id', $id);
            $this->db->execute();
            return $this->db->rowcount();
        }
        
        public function updateMahasiswa($data){
            //(id_siswa, tanggal_daftar , kelas, nama_lengkap, jenis_kelamin, alamat, email, whatsapp)
            $this->db->query("UPDATE {$this->table}
            SET 
                tanggal_daftar = :tanggal_daftar,
                kelas = :kelas,
                nama_lengkap = :nama_lengkap,
                jenis_kelamin = :jenis_kelamin,
                alamat = :alamat,
                email = :email,
                whatsapp = :whatsapp
            WHERE
                id_siswa = :id_siswa;
            ");
            $this->db->bind(':id_siswa', $data['id_siswa']);
            $this->db->bind(':tanggal_daftar', $data['tanggal_daftar']);
            $this->db->bind(':kelas', $data['kelas']);
            $this->db->bind(':nama_lengkap', $data['nama_lengkap']);
            $this->db->bind(':jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind(':alamat', $data['alamat']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':whatsapp', $data['whatsapp']);
            $this->db->execute();

            return $this->db->rowcount();
        }
        
    }
?>