<?php
$categories = $data['categories'];
$authors = $data['authors'];

render('dashboard-navbar'); ?>
<section class="container-fluid row mt-5">
  <div class="col-lg-5 mx-auto shadow-sm p-3 mb-5 bg-white rounded">
    <h3 class="fw-medium">Form Tambah Artikel</h3>
    <form action="/dashboard/article/create" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="judul" class="form-label fw-medium">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" required>
      </div>
      <div class="mb-3">
        <label for="konten" class="form-label fw-medium">Konten</label>
        <textarea class="form-control" name="konten" id="konten" rows="16" required></textarea>
      </div>
      <div class="mb-3">
        <label for="kategori" class="form-label fw-medium">Kategori</label>
        <select class="form-select" name="kategori" id="kategori" required>
          <option value='' hidden>pilih kategori</option>
          <?php foreach ($categories as $category): ?>
          <option value='<?= $category['id'] ?>'><?= $category['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label fw-medium">Penulis</label>
        <select class="form-select" name="penulis" id="penulis" required>
          <option value='' hidden>pilih penulis</option>
          <?php foreach ($authors as $author): ?>
            <option value='<?= $author['id'] ?>'><?= $author['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="thumbnail" class="form-label fw-medium">Thumbnail</label>
        <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/*" required>
      </div>
      <div>
        <button class="btn btn-primary px-4" type="submit" name="submit">
        Tambah Artikel <i class="bi bi-pencil-square"></i>
        </button>
    </form>
  </div>
</section>