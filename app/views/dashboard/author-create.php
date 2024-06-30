<?php render("dashboard-navbar"); ?>
<section class="container min-vh-100">
  <div class="row mt-5">
    <div class="col-lg-5 mx-auto shadow-sm p-3 mb-5 bg-white rounded">
      <h3 class="fw-medium">Form Tambah Penulis</h3>
      <form action="/dashboard/author/create" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label fw-medium">Nama Penulis</label>
          <input type="text" class="form-control" name="nama" id="nama" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fw-medium">Email Penulis</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-medium">Password Penulis</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div>
          <button class="btn btn-primary px-4" type="submit" name="submit">
            Tambah Penulis <i class="bi bi-pencil-square"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>