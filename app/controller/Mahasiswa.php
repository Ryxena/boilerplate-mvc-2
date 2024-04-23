<?php 
    class Mahasiswa extends Controller {
        public function index() {
            $data["mahasiswa"] = $this->model("Siswa_model")->getAllMahasiswa();
            $data['title'] = "Mahasiswa";
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/footer");
            // echo "ini mahasiswa";
        }
        
        public function tambah(){
            
            if ($this->model("Siswa_model")->addMahasiswa($_POST) > 0) {
                Flasher::setFlash("create user","mantap berhasil","success");
                header('Location: ' . BASE_URL . '/mahasiswa');
            } else {
                Flasher::setFlash("create user","error wak","error");
                header('Location: ' . BASE_URL . '/mahasiswa');
            }
        }
        public function ubah(){
            
            if ($this->model("Siswa_model")->updateMahasiswa($_POST) > 0) {
                Flasher::setFlash("update user","mantap berhasil","success");
                header('Location: ' . BASE_URL . '/mahasiswa');
            } else {
                Flasher::setFlash("update user","error wak","error");
                header('Location: ' . BASE_URL . '/mahasiswa');
            }
        }
        public function detail($id){
            $data = $this->model("Siswa_model")->getMahasiswaById($id[0]);
            $this->view("templates/header", $data);
            $this->view("detail/index", $data);
            $this->view("templates/footer");
        }

        public function delete($id){
            $data = $this->model("Siswa_model")->deleteMahasiswa($id[0]);
            if(!$data) {
                Flasher::setFlash("delete user","post","success");
                header('Location: ' . BASE_URL . '/mahasiswa');
            } else {
                Flasher::setFlash("delete user",'post','error');
                header('Location: ' . BASE_URL . '/mahasiswa');
            }
        }
        public function getubah(){
            echo json_encode($this->model('Siswa_model')->getMahasiswaById($_POST['id']));
        }
    }