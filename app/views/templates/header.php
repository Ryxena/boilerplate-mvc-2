<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/v/bs5/dt-2.0.1/af-2.7.0/datatables.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.1/af-2.7.0/b-3.0.0/datatables.min.css" rel="stylesheet"> -->
 
    <link rel="stylesheet" href="../public/css/sweetalert2.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Home</a>
        <a class="nav-link" href="../public/mahasiswa">Mahasiswa</a>
        <a class="nav-link" href="../public/about">About</a>
      </div>
    </div>
  </div>
</nav>