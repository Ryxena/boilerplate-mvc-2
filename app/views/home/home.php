<table class="table mt-3" id="mytable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data["mahasiswa"] as $siswa) : ?>
    <tr>
      <th scope="row"><?= $siswa["id_siswa"] ?></th>
      <td><?= $siswa["nama_lengkap"] ?></td>
      <td><?= $siswa["kelas"] ?></td>
      <td><?= $siswa["email"] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.1/af-2.7.0/b-3.0.0/datatables.min.js"></script>
<script>
  new DataTable("#mytable")
</script>