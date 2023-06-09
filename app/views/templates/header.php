<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar bg-danger navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL;?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?= $data['activehome']; ?>" aria-current="page" href="<?= BASEURL;?>">Home</a>
        <a class="nav-link <?= $data['activemahasiswa']; ?>" aria-current="page" href="<?= BASEURL;?>/mahasiswa">Mahasiswa</a>
        <a class="nav-link <?= $data['activeabout']; ?>" href="<?= BASEURL;?>/about/">About</a>
      </div>
    </div>
  </div>
</nav>