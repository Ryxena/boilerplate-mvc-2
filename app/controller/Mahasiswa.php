<?php 
    class Mahasiswa extends Controller {
        public function index() {
            $data["mahasiswa"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
            $data['title'] = "Mahasiswa";
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/header");
            // echo "ini mahasiswa";
        }

        public function tambah(){
            $nama = $_POST['nama'];
            $nrp = $_POST['nrp'];
            $email = $_POST['email'];
            $jurusan = $_POST['jurusan'];

            $this->model("Mahasiswa_model")->addMahasiswa($nama, $nrp, $email, $jurusan);
            header('Location: http://localhost/boilerplate-mvc/public');
        }
    }