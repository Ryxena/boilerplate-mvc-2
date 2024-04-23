<div class="row">
    <div class="col-lg-6">
        <h3>daftar mahasiswa</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Create new mahasiswa</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="mahasiswa/tambah" method="post">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">id</label>
                                <input type="text" class="form-control" name="id_siswa" id="id">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="name">
                            </div>
                            <div class="mb-3" id="date">
                                <label for="recipient-name" class="col-form-label">Tanggal Daftar</label>
                                <input type="date" class="form-control" name="tanggal_daftar" id="tgl_daftar" value="<?= date('Y-m-d') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="col-form-label">Jenis Kelamin</label>
                                <select id="gender" class="form-control" name="jenis_kelamin">
                                    <option value="Laki laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-floating">
                                <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="alamat" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Insert</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
        Flasher::flash();
        ?>

        <ul class="list-group">
            <?php foreach ($data["mahasiswa"] as $siswa) : ?>
                <li class="list-group-item">
                    <?= $siswa["nama_lengkap"] ?>
                    <a href="<?= BASE_URL ?>/mahasiswa/delete/<?= $siswa["id_siswa"] ?>" class="btn btn-danger float-end m-2" onclick="return confirm('yakin ?');">hapus</a>
                    <button class="btn btn-success float-end m-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $siswa["id_siswa"] ?>">Ubah</button>
                    <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $siswa["id_siswa"] ?>" class="btn btn-danger float-end m-2">detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= BASE_URL ?>/js/script.js"></script>