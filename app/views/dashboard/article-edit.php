<?php
$article = $data['article'];
$categories = $data['categories'];
$authors = $data['authors'];


render('dashboard-navbar'); ?>

<section class="container-fluid row mt-5">
  <div class="col-lg-5 mx-auto shadow-sm p-3 mb-5 bg-white rounded">
    <h3 class="fw-medium">Form Edit Artikel</h3>
    <form action="/dashboard/article/edit" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $article['id'] ?>">
      <input type="hidden" name="curr_thumbnail" value="<?= $article['thumbnail'] ?>">
      <div class="mb-3">
        <label for="judul" class="form-label fw-medium">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" value="<?= $article['judul'] ?>" required>
      </div>
      <div class="mb-3">
        <label for="konten" class="form-label fw-medium">Konten</label>
        <textarea class="form-control" name="konten" id="konten" rows="16" required><?= $article['konten'] ?></textarea>
      </div>
      <div class="mb-3">
        <label for="kategori" class="form-label fw-medium">Kategori</label>
        <select class="form-select" name="kategori" id="kategori" required>
          <option value='' hidden>pilih kategori</option>
          <?php foreach ($categories as $category):
          $selected = $category['id'] == $article['id_kategori'] ? 'selected' : '';
          ?>
          <option value='<?= $category['id'] ?>' <?= $selected ?> ><?= $category['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="penulis" class="form-label fw-medium">Penulis</label>
        <select class="form-select" name="penulis" id="penulis" required>
          <option value='' hidden>pilih penulis</option>
          <?php foreach ($authors as $author): 
          $selected = $author['id'] == $article['id_penulis'] ? 'selected' : '';
          ?>
            <option value='<?= $author['id'] ?>' <?= $selected ?> ><?= $author['nama'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="thumbnail" class="form-label fw-medium">Thumbnail</label>
        <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/*" required>
        <div>
          <p class="m-0 mt-1">Thumbnail saat ini: </p>
          <img src="<?= '../../' . UPLOAD_PATH . $article['thumbnail'] ?>" alt="thumbnail" class="img-thumbnail">
        </div>
      </div>
      <div>
        <button class="btn btn-primary px-4" type="submit" name="submit">
        <i class="bi bi-pencil-square"></i> Simpan Perubahan
        </button>
    </form>
  </div>
</section>