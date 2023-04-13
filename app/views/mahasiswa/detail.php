<div class="container mt-5">
	<div class="card w-25 mb-3">
  		<div class="card-body">
    		<h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
    		<h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
    	<p class="card-text"><?= $data['mhs']['email']; ?></p>
    	<p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
    	<hr class="my-4">
    	<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
  </div>
</div>


</div>