<?php render('dashboard-navbar'); ?>
<section class="container min-vh-100">
  <div class="row mt-5">
    <div class="col-lg-5 mx-auto shadow-sm p-3 mb-5 bg-white rounded">
      <h3 class="fw-medium">Form Tambah Kategori</h3>
      <form action="/dashboard/category/create" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label fw-medium">Nama Kategori</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div>
          <button class="btn btn-primary px-4" type="submit" name="submit">
            Tambah Kategori <i class="bi bi-pencil-square"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>