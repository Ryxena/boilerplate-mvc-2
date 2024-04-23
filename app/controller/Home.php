<?php
    class Home extends Controller {
        public function index(){
            $data['title'] = "Home";
            $data['mahasiswa'] = $this->model('Siswa_model')->getAllMahasiswa();
            $this->view("templates/header", $data);
            $this->view("home/home", $data);
            $this->view("templates/footer");
        }
        public function tambah(){
            $data['nama'] = $_POST['nama'];
            $data['nrp'] = $_POST['nrp'];
            $data['email'] = $_POST['email'];
            $data['jurusan'] = $_POST['jurusan'];

            $data = $this->model("Siswa_model")->addMahasiswa($data);
            if(!$data) {
                Flasher::setFlash("create user","post","success");
                header('Location: ' . BASE_URL);
            } else {
                Flasher::setFlash("create user",'post','error');
                header('Location: ' . BASE_URL);
            }
        }
    }
?>