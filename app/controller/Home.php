<?php
    class Home extends Controller {
        public function index(){
            $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
            $this->view("templates/header");
            $this->view("home/home", $data);
            $this->view("templates/footer");
        }
        public function tambah(){
            $nama = $_POST['nama'];
            $nrp = $_POST['nrp'];
            $email = $_POST['email'];
            $jurusan = $_POST['jurusan'];

            $data = $this->model("Mahasiswa_model")->addMahasiswa($nama, $nrp, $email, $jurusan);
            var_dump($data);
            if(!$data) {
                Flasher::setFlash("create user","sukses","post");
                header('Location: http://localhost/boilerplate-mvc/public');
            } else {
                Flasher::setFlash("create user",'error','post');
                header('Location: http://localhost/boilerplate-mvc/public');
            }
        }
    }
?>