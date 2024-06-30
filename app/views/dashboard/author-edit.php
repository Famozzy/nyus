<?php
$author = $data['author'];

render('header'); ?>
<section class="container min-vh-100">
  <div class="row mt-5">
    <div class="col-lg-5 mx-auto shadow-sm p-3 mb-5 bg-white rounded">
      <h3 class="fw-medium">Form Edit Penulis</h3>
      <form action="/dashboard/author/edit" method="post">
        <input type="hidden" name="id" value="<?= $author['id'] ?>">
        <div class="mb-3">
          <label for="nama" class="form-label fw-medium">Nama Penulis</label>
          <input type="text" class="form-control" name="nama" id="nama" value="<?= $author['nama'] ?>" required>
        </div>
        <div>
          <button class="btn btn-primary px-4" type="submit" name="submit">
            Edit Penulis <i class="bi bi-pencil-square"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>