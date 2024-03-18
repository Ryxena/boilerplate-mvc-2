<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create new mahasiswa</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Home/tambah" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nrp</label>
            <input type="text" class="form-control" name="nrp" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" id="recipient-name">
          </div>
          <button type="submit" class="btn btn-primary">Send message</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
  Flasher::flash();
?>
<table class="table mt-3" id="mytable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Nrp</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data["mahasiswa"] as $mahasiswa) : ?>
    <tr>
      <th scope="row"><?= $mahasiswa["id"] ?></th>
      <td><?= $mahasiswa["nama"] ?></td>
      <td><?= $mahasiswa["nrp"] ?></td>
      <td><?= $mahasiswa["jurusan"] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.1/af-2.7.0/b-3.0.0/datatables.min.js"></script> -->
<script>
  // new DataTable("#mytable")
</script>