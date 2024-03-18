<div class="row">
    <div class="col-lg-6">
        <h3>daftar mahasiswa</h3>
    </div>
    <ul class="list-group">
        <?php foreach ($data["mahasiswa"] as $mahasiswa) : ?>
            <li class="list-group-item">
                <?= $mahasiswa["nama"] ?>
                <a href="<?= BASE_URL ?>/mahasiswa/delete/<?= $mahasiswa["id"]?>" class="btn btn-danger float-end m-2" onclick="return confirm('yakin ?');">hapus</a>
                <a href="<?= BASE_URL ?>/mahasiswa/ubah/<?= $mahasiswa["id"]?>" class="btn btn-success float-end m-2 tampilModalUbah" data-toggle="modal" data-taget="#formModal" data-id="<?= $mahasiswa["id"]?>" onclick="return confirm('yakin ?');">ubah</a>
                <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mahasiswa["id"]?>" class="btn btn-danger float-end m-2">detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>  